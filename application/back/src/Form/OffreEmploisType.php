<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\OffreEmplois;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreEmploisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client',EntityType::class,[
                'class'=>Client::class,
                'query_builder'=>function(EntityRepository $s){
                    return $s->createQueryBuilder('c')->orderBy('c.nom');
                }
            ])
            ->add('titre',TextType::class,[
                'label'=>'Poste'
            ])
            ->add('contrat', ChoiceType::class, [
                'choices' => $this->getChoices()
            ])
            ->add('date_limite',DateType::class)
            ->add('activite',TextareaType::class)
            ->add('mission',TextareaType::class)
            ->add('profil',TextareaType::class)
            ->add('reference',TextareaType::class)
            ->add('Ajouter / Modifier', SubmitType::class)
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
