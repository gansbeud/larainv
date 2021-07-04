<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Item;
use Livewire\WithPagination;

// sku	category	name	brandname	price	qty
class Items extends Component
{
    public $items, $sku, $category, $name, $brandname, $price, $qty, $item_id;
    public $isOpen = 0;
  
    use WithPagination;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->items = Item::All();
        return view('livewire.items');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->sku = '';
        $this->category = '';
        $this->name = '';
        $this->brandname = '';
        $this->price = '';
        $this->qty = '';
        $this->item_id='';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'sku' => 'required',
            'category' => 'required',
            'name' => 'required',
            'brandname' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
   
        Item::updateOrCreate(['id' => $this->item_id], [
            'sku' => $this->sku,
            'category' => $this->category,
            'name' => $this->name,
            'brandname' => $this->brandname,
            'price' => $this->price,
            'qty' => $this->qty,
        ]);
  
        session()->flash('message', 
            $this->item_id ? 'Item Updated Successfully.' : 'Item Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $Item = Item::findOrFail($id);
        $this->item_id = $id;
        $this->category = $Item->category;
        $this->sku = $Item->sku;
        $this->name = $Item->name;
        $this->brandname = $Item->brandname;
        $this->price = $Item->price;
        $this->qty = $Item->qty;

        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Item::find($id)->delete();
        session()->flash('message', 'Item Deleted Successfully.');
    }
}