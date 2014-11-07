<?php

class UserController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /user/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /user
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /user/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /user/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /user/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /user/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function lista()
    {
        $users = User::where('id_rol', 5)->orderBy('id', 'desc')->paginate(15);

        return View::make('users.list')->with('users',$users);;

    }


    public function indexAdmin(){
        return View::make('users.admin');
    }


   public function editAdmin($id){

       return 'eee'.$id;

   }

    public function destroyAdmin($id){

        return 'eee'.$id;

    }

    public function saveAdmin(){
        $data =Input::all();
        Log::error($data);

        $rules = array(
            'email'     => 'required|email|unique:users',
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'password'  => 'required|min:8',
            'password_r' =>'required'
        );

        $messages =  array(
            'email.required'        => 'El campo Email es requerido',
            'email.email'           => 'Ese Email no es válido',
            'email.unique'          => 'Existe un registro con ese Email',
            'full_name.required'    => 'El campo Nombre es requerido',
            'full_name.min'         => 'El campo Nombre debe contener al menos 4 caracteres',
            'password.required'     => 'El campo Contraseña es requerido',
            'password.min'          => 'La Contraseña debe contener al menos 8 caracteres',
            'password_r.required'   => 'EL password de confirmacion es requerido'
        );


        $validator = Validator::make($data, $rules,$messages);
        if($validator->passes()){
            $user = new User;
            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->password =Hash::make($data['password']);
            $user->c_dom = $data['dp'];
            $user->c_cor = $data['cc'];
            $user->id_ctacor= $data['cta_corp'];
            $user->id_ctareg = $data['cta_reg'];
            $user->c_chat = $data['chat_cc'];
            $user->c_call = $data['call_c'];
            $user->c_mail = $data['email_c'];
            $user->c_cobra = $data['cobranza_c'];
            $user->id_rol = 5;
            $user->save();
            return Redirect::to('admin/usuarios');
        }
        return Redirect::back()->withInput()->withErrors($validator->messages());
    }
}