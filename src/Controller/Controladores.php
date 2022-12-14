<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

//Incluímos los datos proporcionados por el modelo de datos
use App\Entity\BaseDatos;


Class Controladores extends AbstractController {

/** 
 * @Route("/", name="index")
 */
public function home()
{
    $articulos = BaseDatos::getArticulos();
    return $this->render('listaArticulos.twig', array('listaArticulos'=>$articulos));
}

/** 
 * @Route("/tienda/articulo/{id}", name="articulo")
 */
public function articulo($id)
{
    $articulo = BaseDatos::getArticulo($id);
    
    return $this->render('detalles_articulo.twig', array('articulo'=>$articulo));
}
/** 
 * @Route("/registro", name="registro")
 */
public function registro(Request $request)
{   
    $form = $this->createFormBuilder()
    ->add('Nombre', TextType::class)
    ->add('Apellidos', TextType::class)
    ->add('Direccion', TextType::class)
    ->add('Email', EmailType::class)
    ->add('Password', PasswordType::class)
    ->add('Enviar', SubmitType::class, array('label' => 'Enviar'))
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {			
        $datos = $form->getData();		
        $nombre = $datos['Nombre'];
        return $this->render('registro_correcto.twig', array('nombre'=>$nombre));
    }
    return $this->render('registro.twig', array(
    'form' => $form->createView(),
    ));
}
/** 
 * @Route("/sugerencias", name="sugerencias")
 */
public function sugerencias(Request $request){
    $sugerencias = BaseDatos::sugerencias();

    // Creamos los campos del formulario
    $formularioSugerencias = $this->createFormBuilder()
    ->add('Nombre', TextType::class)
    ->add('Comentario', TextType::class)
    ->add('Enviar', SubmitType::class, array('label' => 'Enviar'))
    ->getForm();

    $formularioSugerencias->handleRequest($request);
    
    if ($formularioSugerencias->isSubmitted() && $formularioSugerencias->isValid()) {			
        $datos = $formularioSugerencias->getData();		
        return $this->render('grabar-sugerencia.twig', $datos);

    }

    return $this->render('sugerencias.twig', array(
    'sugerencias' => $sugerencias, 'formulario' => $formularioSugerencias
    ));
}

}

?>