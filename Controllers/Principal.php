<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {

    }
    //vista about
    public function about()
    {
        $data['title'] = 'Nuestro Productos';
        $data['productos'] = $this->model->getProductos();
        $this->views->getView('principal', "about", $data);
    }
    //vista shopS
    public function shop()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "shop", $data);
    }
    //vista detail
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //vista contac
    public function contactos()
    {
        $data['title'] = 'contactos';
        $this->views->getView('principal', "contac", $data);
    }       
}