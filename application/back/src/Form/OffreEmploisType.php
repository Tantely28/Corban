<?php

namespace App\Form;

use App\Entity\OffreEmplois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreEmploisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('dateLimite')
            ->add('contrat', ChoiceType::class, [
                'choices' => $this->getChoices()
            ])
            ->add('activite')
            ->add('mission')
            ->add('profil')
            ->add('reference')
            ->add('Ajouter', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OffreEmplois::class,
        ]);
    }

    private function getChoices()
    {
        $choices = OffreEmplois::CONTRAT;
        $output = [];
        foreach ($choices as $k => $v){
            $output[$v] = $k;
        }
        return $output;
    }
}
