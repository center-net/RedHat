<?php

namespace App\Http\Admin\Invoices\ItemCategories;

use App\Models\BillingCategorie;
use App\Models\ItemCategorie;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

class Add extends Component
{
    use WithFileUploads;
    public $ItemCategorie, $image, $name, $active, $billing_categories_id;

    #[Validate([
        'name'                => 'required|string|unique:item_categories,name',
        'active'              => 'required|boolean',
        'image'              => 'required|image',
        ], attribute: [
            'active'            => 'حالة التفعيل',
    ])]

    public function mount()
    {
        $this->ItemCategorie = new ItemCategorie();
    }

    public function submit()
    {

        $data = $this->validate();
        
        if($this->image){
            $data['image']= $this->name.'.'.$this->image->extension();
            $this->image->storeAs('itemCategories', $this->name.'.'.$this->image->extension(),'public');
            $this->dispatch('refreshData')->to(Data::class);
        }
        $this->ItemCategorie::create($data);

        $this->reset([
            'name',
            'active',
            'image',
        ]);
        $this->dispatch('AddModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }


    public function render()
    {
        return view('admin.invoices.item-categories.add',[
            'mains'=> BillingCategorie::where('active','1')->get(),
        ]);
    }
}
