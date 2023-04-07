<?php

namespace App\Form;

use App\Entity\InvoiceLines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceLinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description')
            ->add('quantity')
            ->add('amount')
            ->add('vatAmount')
            ->add('totalVat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InvoiceLines::class,
        ]);
    }
}
