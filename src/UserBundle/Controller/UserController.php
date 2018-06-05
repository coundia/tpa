<?php
namespace UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/liste", name="utilisateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }
    /**
     * CEdit a new user.
     *
     * @Route("/edit/{id}", name="utilisateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $id)
    {
        $editForm = $this->createForm('UserBundle\Form\UserType', $id);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            return $this->redirectToRoute('utilisateur_index');
        }
        return $this->render('user/edit.html.twig', array(
            'article' => $id,
            'edit_form' => $editForm->createView(),
        ));
    }
    /**
     * Creates a new user entity.
     *
     * @Route("/nouveau", name="utilisateur_new")
     * @Method({"GET", "POST"})
     */
    public function nouveauAction(Request $request)
    {
        $utilisateur = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirectToRoute('utilisateur_index', array('id' => $utilisateur->getId()));
        }

        return $this->render('user/nouveau.html.twig', array(
            'utilisateurs' => $utilisateur,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a user entity.
     *
     * @Route("/voir/{id}", name="utilisateur_voir")
     * @Method("GET")
     */
    public function voirAction(User $utilisateur)
    {
        $deleteForm = $this->createDeleteForm($utilisateur);

        return $this->render('user/voir.html.twig', array(
            'utilisateurs' => $utilisateur,
            //'delete_form' => $deleteForm->createView(),
        ));
    }
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    /**
     * Finds and displays a user entity.
     *
     * @Route("/delete/{id}", name="utilisateur_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, User $user)
    {

        //$form = $this->createDeleteForm($user);
        //var_dump($user);exit();
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        //}

        return $this->redirectToRoute('utilisateur_index');
    }
    /**
     * @Route("/active/{id}", name="utilisateur_activer")
     */
    public function enableUsersAction(Request $request, User $user)
    {

        $userManager = $this->get('fos_user.user_manager');
            $user = $userManager->findUserBy(array('id' => $user->getId()));

            $user->setEnabled(1);
        //var_dump($user); exit();
            $userManager->updateUser($user);
        return $this->redirectToRoute('utilisateur_index');
    }

}