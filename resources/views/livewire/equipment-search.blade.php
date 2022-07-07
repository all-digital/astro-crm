{{-- <div class="mb-3 mb-4">

    <label for="equipment">Equipamento</label>
    <input list="equipments" name="equipment" id="equipment" class="form-control" wire:model="equipment" placeholder="Imei - Modelo - Marca">  
    <datalist id="equipments"> 
              
        <option value="{{$imei}}" selected></option>
        @foreach ($equipmentsModel as $item)

        <option value="{{$item->id}} - {{$item->imei}} - {{$item->model}} - {{$item->brand}}">                                          
       @endforeach
    </datalist>                                              
</div> --}}

{{-- <div class="mb-3 mb-4">

    <label for="equipment">Equipamento</label>    
    <select name="equipment" class="form-control select2-equipment" wire:model="equipment">
        <option value="Imei - Modelo - Marca" selected>Imei - Modelo - Marca</option>
       @foreach ($equipmentsModel as $item)
          <option value="{{$item['id']}}"> {{$item->imei}} - {{$item->model}} - {{$item->brand}} </option>                                         
       @endforeach                                              
                                                                                     
    </select>                                          
                                       
</div> --}}


<div class="mb-3 mb-4">

    <label for="equipment"  >Equipamento</label>
    <input  name="equipment" id="equipment" class="form-control"  placeholder="Imei - Modelo - Marca">  
    <div id="equipments"> 
              
        

    </div>                                              
</div>