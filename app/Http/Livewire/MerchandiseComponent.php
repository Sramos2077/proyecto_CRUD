<?php

namespace App\Http\Livewire;

use App\Models\Merchandise;
use App\Models\Category;
use Livewire\Component;

class MerchandiseComponent extends Component
{
        public $Merchandise = []; //varaible para mostrar todos los registroa en la vista
        public $category_id, $categories = [];
        public $id_merchandise, $name, $price, $quantity;
        public $modalregister, $modaledit, $modaldelete;
        public $register;
    public function render()
    {
        $this->Merchandise = Merchandise::all();
        return view('livewire.merchandise-component');
    }

    public function mount(){
        $this->categories = Category::all();
    }

    public function saveregister(){
        $register = new Merchandise();
        $register->name = $this->name;
        $register->price = $this->price;
        $register->quantity = $this->quantity;
        $register->category_id = $this->category_id;
        $register->save();
        $this->closeallmodals();
    }

    public function closeallmodals(){
        $this->modalregister = false;
        $this->modaledit = false;
        $this->modaldelete = false;
    }

    public function updateregister(){
        $this->register->update([
            'name' => $this->name,
            'price' =>$this->price,
            'quantity' => $this->quantity,
            'category_id' => $this->category_id
            ]);
                $this->closeallmodals();
    }

    //mostrar los registros para editar
    public function editregister($id){
        $this->register = Merchandise::findOrfail($id);
        $this->id = $this->id;
        $this->name = $this->register->name;
        $this->price = $this->register->price;
        $this->quantity = $this->register->quantity;
        $this->category_id = $this->register->category_id;
        $this->modaledit = true;
    }
}
