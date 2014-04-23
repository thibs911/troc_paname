<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jacquet\UtilisateurBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('email', 'email', array('label' => 'Email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'Pseudo', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de Passe'),
                'second_options' => array('label' => 'Confirmation du Mot de Passe'),
                'invalid_message' => 'Mots de passe différent'
            ))
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('prenom', 'text', array('label' => 'Prénom'))
            ->add('adresse', 'text', array('label' => 'Adresse'))
            ->add('ville', 'text', array('label' => 'Ville'))
            ->add('cp', 'integer', array('label' => 'Code Postal'))
            ->add('telephone', 'text', array('label' => 'Téléphone'))
            ->add('birthdate', 'datetime', array('label' => 'Date de Naissance',
                                                  'widget' => 'single_text'))

        ;

        }

    public function getName()
    {
        return 'jacquet_user_registration';
    }
}
