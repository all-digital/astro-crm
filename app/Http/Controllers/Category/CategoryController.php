<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyCreateRequest;

use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{

  public function index(Request $request)
  {
    
    $idCompany = auth()->user()->company->id; 
    
    $rolesAuthUser = auth()->user()->roles()->get()->toArray();
    $permission = array_map(function($value){
        return $value['name'];    
    },$rolesAuthUser);

    if(in_array('Super Admin',$permission))
    {
        $categories = Category::all()->toArray();   

    }else{
        $categories = Category::where('company_id', $idCompany)->get();    
        $categories = $categories->toArray();
    }

   

    $urlCategory = url('category-edit');
        
        $categories = array_map(function($value)use ($urlCategory){

                      
            
            $id = $value['id'];          

            $value['button'] = "<div class='d-flex justify-content-around' > <a class='btn btn-primary' target ='_blank' href='$urlCategory\\$id' >Editar</a>";
           
            return $value; 
        },$categories);

        // dd($categories);

    return view('category.index',compact('categories'));

  }//end   

  public function edit(Request $request, $id)
  {
    $category = Category::where('id',$id)->get();
    $category = $category->toArray();
    $category = $category[0];

    
    return view("category.edit_category", compact('category', 'id'));
  }//end 


  public function update(Request $request, $id)
  {

       // dd($request->all());
       $LastName = auth()->user()->last_name;

        $category = Category::find($id);

        $category->update([
            'name'=> $request->name,
            'description' => $request->description,
            'responsible_last_updated'  => auth()->user()->name . $LastName,
        ]);

        return redirect()                   
        ->route('category-edit.edit',$id)
        ->withSuccess('Categoria editada com Sucesso');


  }//end 



  public function show(Request $request)
  {    
    return view('category.create_category');

  }//end



  public function store(CompanyCreateRequest $request)
  {
      
    $category = Category::create([
        'name' => $request->name,
        'company'=> $request->company,
        'description' => $request->description,
        'responsible_for_insert' => auth()->user()->name,  
        'company_id' => auth()->user()->company->id,
        
    ]);

    $result = $category->save();

    if($result){

        return redirect()                   
        ->route('category.store')
        ->withSuccess('Categoria cadastrado com Sucesso');
        
    }else{
        return redirect()                   
        ->route('category.store')
        ->with('notSave','Não foi possivel salvar essa categoria');       
    }
  

      
  }//end





}// end class
