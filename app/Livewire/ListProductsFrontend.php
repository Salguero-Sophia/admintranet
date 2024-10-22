<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Families;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListProductsFrontend extends Component
{
    use WithPagination;

    public $baseUrl;

    public function mount()
    {
        $this->baseUrl = env('API_ENDPOINT');
    }

    public $familia = 0;
    public $familiaSeleccionada = 0;
    public $categoria = 0;
    public $categoriaSeleccionada = 0;

    public $producto = '';
    public $paginaActual = 1;

    public function search()
    {
        $this->resetPage();
    }

    public function paginaSiguiente()
    {
        $this->paginaActual += 1;
        $this->resetPage();
    }

    public function paginaAnterior()
    {
        $this->paginaActual -= 1;
        $this->resetPage();
    }

    public function seleccionarPagina($pagina)
    {
        $this->paginaActual = $pagina;
    }

    public function agregarProducto()
    {
        $data = [
            "orderDetail" => [
                "productId" => "7728905b-350c-4bec-9635-cd4ad54b9575",
                "productsModifiers" => [
                    [
                        "productId" => "cb93a5bd-81b0-4c19-bab3-f33e546b44bf",
                        "modifierId" => "6421048a-3190-44c3-b66b-0962c534a8dd",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ],
                    [
                        "productId" => "fef259ed-ae5e-4583-a9dc-b7f0a7d9cf15",
                        "modifierId" => "c1998806-2c95-4e2f-a21f-a3f5fbbef2a6",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ],
                    [
                        "productId" => "59fca357-6026-4721-b0a4-bd32d4363f62",
                        "modifierId" => "69697ffc-6021-47be-8b6a-096fd3c8a0e0",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ]
                ],
                "quantity" => 1,
                "observations" => ""
            ]
        ];

        $response = Http::post($this->baseUrl . 'order/create-with-detail', $data);

        $pedido = json_decode($response->getBody()->getContents());

        Session::put('pedido', $pedido);

        return redirect()->route('menu')->with('success', "Delicious food item added successfully!");
    }

    public function searchFamilia($familiaId)
    {
        $this->familia = $familiaId;
        $this->categoria = 0;
        $this->familiaSeleccionada = $familiaId;

        $this->resetPage();
    }

    public function searchCategoria($categoriaId)
    {
        $this->categoria = $categoriaId;
        $this->categoriaSeleccionada = $categoriaId;

        $this->resetPage();
    }

    public function render()
    {
        $familias = Families::where('statusRegister', 1)
            ->orderBy('order', 'asc')
            ->get();

        $categorias = DB::table('families')
            ->join('families_categories', 'families.id', '=', 'families_categories.family_id')
            ->join('categories', 'families_categories.category_id', '=', 'categories.id')
            ->select('categories.*')
            ->where('families.id', $this->familia)
            ->distinct()
            ->get();

        if ($this->producto == '') {
            $response = Http::get($this->baseUrl . 'product?CurrentPage=' . $this->paginaActual . '&ItemsPerPage=10');
        } else {
            $response = Http::get($this->baseUrl . 'product/withcategory?Name=' . $this->producto . '&CurrentPage=' . $this->paginaActual . '&ItemsPerPage=10');
        }

        $data = json_decode($response->getBody()->getContents());

        $data->totalPages = ceil($data->totalRecords / $data->itemsPerPage);

        return view('livewire.list-products-frontend', [
            'data'       => $data,
            'familias'   => $familias,
            'categorias' => $categorias,
        ]);
    }
}
