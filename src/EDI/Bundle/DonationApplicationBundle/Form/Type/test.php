->add('<change>', ChoiceType::class, [
        'label' => '<change_label>',
        'expanded' => true,
        'multiple'  => false,
        'attr'  => ['name' =>'<change>'],
        'choices'  => [
            'No' => 'No',
            'Yes' => 'Yes'
        ],
        'empty_data' => 'No',
        'choice_attr' => function($choiceValue, $key, $value) {
            // adds a class like attending_yes, attending_no, etc
            return ['id' => '<change>_'.strtolower($value)."_id"];
        },
    ])
    ->add('<change>Date', OroDateType::class, [
        'label' => '<change_label> Date',
        'widget' => 'single_text',
        'input' => 'string',
        //default format of the date
        'format' => 'yyyy-MM-dd',
    ])
    ->add('<change>Initials', TextType::class, [
        'label' => '<change_label> Initials'
    ])
