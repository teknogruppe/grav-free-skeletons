<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/grav-skeleton-one/user/pages/01.home/_contact/form.md',
    'modified' => 1637105245,
    'data' => [
        'header' => [
            'title' => 'contact',
            'cache_enable' => false,
            'form' => [
                'name' => 'contact',
                'action' => '/home#contact',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Name',
                        'classes' => 'form-control',
                        'placeholder' => 'Enter your name',
                        'autofocus' => 'off',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'position' => 'left',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'classes' => 'form-control',
                        'placeholder' => 'Enter your email address',
                        'type' => 'email',
                        'position' => 'left',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Message',
                        'placeholder' => 'Enter your message',
                        'type' => 'textarea',
                        'classes' => 'form-control',
                        'position' => 'right',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'classes' => 'btn btn-primary btn-lg',
                        'value' => 'Submit'
                    ]
                ],
                'process' => [
                    0 => [
                        'message' => 'Thank you for getting in touch!'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'contact\'
cache_enable: false

form:
    name: contact
    action: /home#contact
    fields:
        - name: name
          label: Name
          classes: form-control
          placeholder: Enter your name
          autofocus: off
          autocomplete: on
          type: text
          position: left
          validate:
            required: true

        - name: email
          label: Email
          classes: form-control
          placeholder: Enter your email address
          type: email
          position: left
          validate:
            required: true

        - name: message
          label: Message
          placeholder: Enter your message
          type: textarea
          classes: form-control
          position: right
          validate:
            required: true

    buttons:
        - type: submit
          classes: "btn btn-primary btn-lg"
          value: Submit
        
    process:
        - message: Thank you for getting in touch!',
        'markdown' => '## CONTACT US
### Lorem ipsum dolor sit amet consectetur.
'
    ]
];
