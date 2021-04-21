<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use DB;


class MainController extends Controller
{
    public function emergency()
    {
        return view('admin101/emergency');

    }

    public function patientpage()
    {
        return view('patient/patientpage');

    }

    public function addmed()                                         //add medicine info
    {
        return view('admin101/addmed');
    }

    public function adminpage()
    {
        return view('admin101/adminpage');
    }

    public function adddoc()                                          //add doctor info
    {
        return view('admin101/adddoc');
    }


    public function addhosptl()                                      //add hospital info
    {
        return view('addhosptl');
    }


    public function showmed()
    {
        return view('admin101/showmed');
    }

    public function showdoc()
    {
        return view('admin101/showdoc');
    }


    public function addemrgncy()
    {
        return view('admin101/addemrgncy');
    }

    public function patientdashbrd()
    {
        return view('patient/patientdashboard');
    }

    public function addmedinfos(Request $request)                                      //Insertmedinfo
    {
        $validatedData = $request->validate([
            'medname' => "required|unique:medinfos|min:4",
        ]);

        $data=array();
        $data['medname']=$request->medname;
        $data['othername']=$request->othername;
        $data['treatment']=$request->treatment;
        $data['sideeffects']=$request->sideeffects;
        $data['notfor']=$request->notfor;
        $data['Details']=$request->Details;


        //return response()->json($data);

        $medinfos=DB::table('medinfos')->insert($data);
        return redirect()->back();
    }

    public function showmedinfo()                                                  //showmedinfo
    {
        $showmed=DB::table('medinfos')->get();
        return view('admin101/showmed',compact('showmed'));
    }

    public function deletemedinfo($id)
    {
        $delete=DB::table('medinfos')->where('id',$id)->delete();
    }
    public function editmedinfo($id)
    {
        $showmed=DB::table('medinfos')->where('id',$id)->first();
        return view('updateadmin.updatemedinfo', compact('showmed'));
    }

    public function updatemedinfo(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'docname' => "required|unique:docinfos|min:4",
            
        //     ]);
            
        $data=array();
        $data['medname']=$request->medname;
        $data['othername']=$request->othername;
        $data['treatment']=$request->treatment;
        $data['sideeffects']=$request->sideeffects;
        $data['notfor']=$request->notfor;
        $data['Details']=$request->Details;
        
        
        //return response()->json($data);
        
        $showmed=DB::table('medinfos')->where('id',$id)->update($data);
        return redirect()->back();  
    }


    public function patientdashboard()                                                  //patient dashboard
    {
        return view('patient/patientdashboard');
    }


    //---------------------------------------------------------------------------------------------------------------------


    public function viewmedinfo()                                                  //viewmedinfo
    {
        $showmed=DB::table('medinfos')->get();
        return view('patient/viewmed',compact('showmed'));
    }

    public function viewdocinfo()                                                  //viewdocinfo
    {
        $showdoc=DB::table('docinfos')->get();
        return view('patient/viewdoc',compact('showdoc'));
    }


    public function viewemrgncyinfo()                                                  //viewemrgncyinfo
    {
        $emergencyinfo=DB::table('emrgncy')->get();
        return view('patient/viewemrgncy',compact('emergencyinfo'));
    }





    //--------------------------------------------------------------------------------------------------------------------------






    //-------------------------------------------------------------------------------------


    public function adddocinfos(Request $request)                                      //Insert doctor infos
    {
        $validatedData = $request->validate([
            'docname' => "required|unique:docinfos|min:4",
        ]);

        $data=array();
        $data['docname']=$request->docname;
        $data['dochosptl']=$request->dochosptl;
        $data['docbranch']=$request->docbranch;
        $data['specialist']=$request->specialist;
        $data['docdetails']=$request->docdetails;

        //return response()->json($data);

        $medinfos=DB::table('docinfos')->insert($data);
        return redirect()->back();
       
    }



    public function showdocinfo()                                                  //show doc info
    {
        
        $showdoc=DB::table('docinfos')->get();
        return view('admin101/showdoc',compact('showdoc'));
    }
                                                                                //delete doc
    public function deletedocinfo($id)
    {
        $delete=DB::table('docinfos')->where('id',$id)->delete();
        return redirect()->back();

    }

    public function editdocinfo($id)
    {
        $showdoc=DB::table('docinfos')->where('id',$id)->first();
        return view('updateadmin.updatedocinfo', compact('showdoc'));

    }

   
    public function updatedocinfo(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'docname' => "required|unique:docinfos|min:4",
        // ]);
            
        $data=array();
        $data['docname']=$request->docname;
        $data['dochosptl']=$request->dochosptl;
        $data['docbranch']=$request->docbranch;
        $data['specialist']=$request->specialist;
        $data['docdetails']=$request->docdetails;
        
        
        
        //return response()->json($data);
        
        $showdoc=DB::table('docinfos')->where('id',$id)->update($data);
        return redirect()->back();
        
    }




    //-------------------------------------------------------------------------------------




    public function addemrgncyinfo(Request $request)                                      //Insertemrgncyinfo
    {
        $data=array();
        $data['division']=$request->division;
        $data['area']=$request->area;
        $data['police']=$request->police;
        $data['ambulance']=$request->ambulance;
        $data['fireservice']=$request->fireservice;
        $data['hosptl']=$request->hosptl;



        //return response()->json($data);

        $emrgncyinfo=DB::table('emrgncy')->insert($data);
        return redirect()->back();
    }

    public function showemrgncyinfo()                                                  //showemrgncyinfo
    {
        $emergencyinfo=DB::table('emrgncy')->get();
        return view('admin101/showemrgncy',compact('emergencyinfo'));
    }

    public function deleteemrgncyinfo($id)
    {
        $delete=DB::table('emrgncy')->where('id',$id)->delete();
        return redirect()->back();

    }


    public function editemrgncy($id)
    {
        $showemrgncy=DB::table('emrgncy')->where('id',$id)->first();
        return view('updateadmin.updateemrgncy', compact('showemrgncy'));

    }

    public function updatemrgncy(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'docname' => "required|unique:docinfos|min:4",
            
        //     ]);
            
        $data=array();
        $data['division']=$request->division;
        $data['area']=$request->area;
        $data['police']=$request->police;
        $data['ambulance']=$request->ambulance;
        $data['fireservice']=$request->fireservice;
        $data['hosptl']=$request->hosptl;
        
        
        //return response()->json($data);
        
        $showdoc=DB::table('emrgncy')->where('id',$id)->update($data);
        return redirect()->back();
    }






                                                                                //loginissues

    




                                                                                //patientinfo add



    public function addpatient(Request $request)
    {


        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['number']=$request->number;
        $data['password']=$request->password;



        //return response()->json($data);

        $patientreg=DB::table('patientreg')->insert($data);
        return redirect()->back();

    }




    public function regpatinfo()

    {
        $patientreg=DB::table('patientreg')->get();
        return view('admin101/regpatview',compact('patientreg'));

    }

// -----------------------------------------------------------------------------------------

public function commondata()
{
    return view('admin101/addcomdata');
}


public function comdatainfoad()
{
    $comdata=DB::table('commondata')->get();
    return view('admin101/comdatainfoad',compact('comdata'));
  
}



public function addcommondata(Request $request)
{
   
        $data=array();
        $data['problm']=$request->problm;
        $data['causes']=$request->causes;
        $data['medicine']=$request->medicine;
        $data['dadvice']=$request->dadvice;
        
    //return response()->json($data);

        $comdata=DB::table('commondata')->insert($data);
        return redirect()->back();
    
}



public function showcomdata()

{
    $comdata=DB::table('commondata')->get();
        return view('admin101/showcomdata',compact('comdata'));

}


public function editshowcomdata($id)
{
    $comdata=DB::table('commondata')->where('id',$id)->first();
    return view('updateadmin.updateshowcomdata', compact('comdata'));

}

public function updateshowcomdata(Request $request,$id)
{
    $data=array();
    $data['problm']=$request->problm;
    $data['causes']=$request->causes;
    $data['medicine']=$request->medicine;
    $data['dadvice']=$request->dadvice;
        
        
        //return response()->json($data);
        
        $comdata=DB::table('commondata')->where('id',$id)->update($data);
        return redirect()->back();

}

public function deleteshowcomdata($id)
{
    $delete=DB::table('commondata')->where('id',$id)->delete();
    return redirect()->back();
}

public function comdatainfo()

{
    $comdata=DB::table('commondata')->get();
        return view('admin101/showcomdata',compact('comdata'));

}

// --------------------------------------------------------------------------------commondata


// --------------------------------------------------------------------------------DIETs



public function adminlogin()
{

    return view('admin101/adminlogin');
}



public function adminchck (Request $request)
{ 
    $key = $request->input('key');
    $loc = $request->input('loc');
    // dd($request->input('key'));
    $viewFilePath='';
    if($key=='admin101' && $loc=='rakib' || $key=='reset' && $loc=='reset' ) 
    { 
     $viewFilePath='admin101/adminpage';
     
    }
    else
    {
       
    $viewFilePath='welcome';
    
    
   
    }
    
    Toastr::success('Successful', 'Admin', ["positionClass" => "toast-top-right"]);
    return view($viewFilePath);

   
}


// --------------------------------------------------------------------------------API



public function getGuzzleRequest()

{

    $client = new \GuzzleHttp\Client();

    $request = $client->get('https://api.covid19api.com/summary');

    $response = $request->getBody();

    $response= json_decode($response);
   

    // return view("",compact(""));
    return view('patient/patcovid',compact('response'));
}


public function deleteGuzzleRequest()

{

    $client = new \GuzzleHttp\Client();

    $url = "http://myexample.com/api/posts/1";

    $request = $client->delete($url);

    $response = $request->send();


   
    dd($response);

}






public function view22()

{
    return view('view22');
    
}






















}
