<?php

namespace App\Form;

use App\Entity\Beat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PitchType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $entity = $builder->getData();

        $currentBPM = $entity->getCurrentBeat();

        $builder
            ->add('currentBeat',NumberType::class,['label'=>$currentBPM,'required'=>false,'attr'=>['disabled'=>true]])
            ->add('p1',NumberType::class,['label'=>$currentBPM + 1,'attr'=>['class'=>'text-center']])
            ->add('p2',NumberType::class,['label'=>$currentBPM + 2,'attr'=>['class'=>'text-center']])
            ->add('p3',NumberType::class,['label'=>$currentBPM + 3,'attr'=>['class'=>'text-center']])
            ->add('p4',NumberType::class,['label'=>$currentBPM + 4,'attr'=>['class'=>'text-center']])
            ->add('p5',NumberType::class,['label'=>$currentBPM + 5,'attr'=>['class'=>'text-center']])
            ->add('p6',NumberType::class,['label'=>$currentBPM + 6,'attr'=>['class'=>'text-center']])
            ->add('p7',NumberType::class,['label'=>$currentBPM + 7,'attr'=>['class'=>'text-center']])
            ->add('p8',NumberType::class,['label'=>$currentBPM + 8,'attr'=>['class'=>'text-center']])
            ->add('p9',NumberType::class,['label'=>$currentBPM + 9,'attr'=>['class'=>'text-center']])
            ->add('p10',NumberType::class,['label'=>$currentBPM + 10,'attr'=>['class'=>'text-center']])
            ->add('p11',NumberType::class,['label'=>$currentBPM + 11,'attr'=>['class'=>'text-center']])
            ->add('p12',NumberType::class,['label'=>$currentBPM + 12,'attr'=>['class'=>'text-center']])
            ->add('p13',NumberType::class,['label'=>$currentBPM + 13,'attr'=>['class'=>'text-center']])
            ->add('p14',NumberType::class,['label'=>$currentBPM + 14,'attr'=>['class'=>'text-center']])
            ->add('p15',NumberType::class,['label'=>$currentBPM + 15,'attr'=>['class'=>'text-center']])
            ->add('p16',NumberType::class,['label'=>$currentBPM + 16,'attr'=>['class'=>'text-center']])
            ->add('p17',NumberType::class,['label'=>$currentBPM + 17,'attr'=>['class'=>'text-center']])
            ->add('p18',NumberType::class,['label'=>$currentBPM + 18,'attr'=>['class'=>'text-center']])
            ->add('p19',NumberType::class,['label'=>$currentBPM + 19,'attr'=>['class'=>'text-center']])
            ->add('p20',NumberType::class,['label'=>$currentBPM + 20,'attr'=>['class'=>'text-center']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Beat::class,
        ]);
    }

}
