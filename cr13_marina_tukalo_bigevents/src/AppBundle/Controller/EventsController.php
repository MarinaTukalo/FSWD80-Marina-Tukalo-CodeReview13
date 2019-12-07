<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Events;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventsController extends Controller
{
   /**
    * @Route("/", name="event_list")
    */
   public function listAction(){

       $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findAll();
       return $this->render('events/index.html.twig', array('events'=>$events));
   }

// Add
       /**
    * @Route("/events/add", name="event_add")
    */
   public function addAction(Request $request)
   {
       $event = new Events;
       $form = $this->createFormBuilder($event)->add('name',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('eventDateTime', DateTimeType::class,array('attr' => array('style'=>'margin-bottom:15px')))
       ->add('description',TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('image',UrlType::class, array('attr'=>array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('capacity',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('email',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('phone',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('address',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('webpage',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('eventType',ChoiceType::class, array('choices'=>array('music'=>'music', 'sport'=>'sport', 'movie'=>'movie', 'theater'=>'theater','museum'=>'museum'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('save', SubmitType::class, array('label'=> 'Create event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $name = $form['name']->getData();
           $eventDateTime = $form['eventDateTime']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $phone = $form['phone']->getData();
           $address = $form['address']->getData();
           $webpage = $form['webpage']->getData();
           $eventType = $form['eventType']->getData();

           $event->setName($name);
           $event->setEventDateTime($eventDateTime);
           $event->setDescription($description);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setEmail($email);
           $event->setPhone($phone);
           $event->setAddress($address);
           $event->setWebpage($webpage);
           $event->setEventType($eventType);

           $em = $this->getDoctrine()->getManager();
           $em->persist($event);
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Added'
                   );
           return $this->redirectToRoute('event_list');
       }
       return $this->render('events/add.html.twig', array('form'=> $form->createView()));
   }

// Edit
    /**
    * @Route("/events/edit/{id}", name="event_edit")
    */
   public function editAction($id, Request $request)
   {
       $event = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);

        $event->setName($event->getName());
           $event->setEventDateTime($event->getEventDateTime());
           $event->setDescription($event->getDescription());
           $event->setImage($event->getImage());
           $event->setCapacity($event->getCapacity());
           $event->setEmail($event->getEmail());
           $event->setPhone($event->getPhone());
           $event->setAddress($event->getAddress());
           $event->setWebpage($event->getWebpage());
           $event->setEventType($event->getEventType());

        $form = $this->createFormBuilder($event)->add('name',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('eventDateTime', DateTimeType::class,array('attr' => array('style'=>'margin-bottom:15px')))
       ->add('description',TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('image',UrlType::class, array('attr'=>array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('capacity',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('email',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('phone',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('address',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('webpage',TextType::class, array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
       ->add('eventType',ChoiceType::class, array('choices'=>array('music'=>'music', 'sport'=>'sport', 'movie'=>'movie', 'theater'=>'theater','museum'=>'museum'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('save', SubmitType::class, array('label'=> 'Update event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
       	   $name = $form['name']->getData();
           $eventDateTime = $form['eventDateTime']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $phone = $form['phone']->getData();
           $address = $form['address']->getData();
           $webpage = $form['webpage']->getData();
           $eventType = $form['eventType']->getData();

           $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('AppBundle:Events')->find($id);
           $event->setName($event->getName());
           $event->setEventDateTime($event->getEventDateTime());
           $event->setDescription($event->getDescription());
           $event->setImage($event->getImage());
           $event->setCapacity($event->getCapacity());
           $event->setEmail($event->getEmail());
           $event->setPhone($event->getPhone());
           $event->setAddress($event->getAddress());
           $event->setWebpage($event->getWebpage());
           $event->setEventType($event->getEventType());

           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Updated'
                   );
           return $this->redirectToRoute('event_list');
       }
       return $this->render('events/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
   }

// View
    /**
    * @Route("/events/view/{id}", name="event_view")
    */
   public function viewAction($id)
   {
       $event = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);
       return $this->render('events/view.html.twig', array('event' => $event));
   }
// Delete
   /**
    * @Route("/events/delete/{id}", name="event_delete")
    */
   public function deleteAction($id){
            $em = $this->getDoctrine()->getManager();
           	$event = $em->getRepository('AppBundle:Events')->find($id);
          	$em->remove($event);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Removed'
                   );
            return $this->redirectToRoute('event_list');
   }
}