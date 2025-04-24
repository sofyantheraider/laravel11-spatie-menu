<?php

namespace App\Menus;

use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

class MainMenu
{
    public static function build()
    {
       /*  return Menu::new()
            ->addClass('nav')
            ->add(
                Menu::new()
                    ->addClass('nav-item')
                    ->link(route('home'), 'Home')->addClass('nav-link')->setActiveFromRequest()
                    ->link(route('about'), 'About')->addClass('nav-link')->setActiveFromRequest()
                    ->link(route('contact'), 'Contact')->addClass('nav-link')->setActiveFromRequest()
            );   */

            /* return Menu::new()
                ->addClass('navigation')
                ->add(
                    Link::to('/home', 'Home')
                        ->addClass('home-link')
                        ->setActive(request()->is('home'))
                )
                ->submenu('More', Menu::new()
                    ->addClass('submenu')
                    ->link('/about', 'Submenu 1')
                    ->link('/contact', 'Sub menu')
                )
                ->add(
                    Link::to('/about', 'About')
                        ->setActive(request()->is('about'))
                )
                ->add(
                    Link::to('/contact', 'Contact')
                        ->addParentClass('float-right')
                        ->setActive(request()->is('contact'))
                )
                ->wrap('div', ['class' => 'wrapper']); */


                return Menu::new()
                    ->addClass('navigation')
                    
                    // Menu Home
                    ->add(
                        Link::to('/home', 'Home')
                            ->addClass('home-link')
                            ->setActive(request()->is('home'))
                    )

                    // Submenu "More"
                    ->submenu('More', Menu::new()
                        ->addClass('submenu')
                        ->add(
                            Link::to('/submenu1', 'submenu1')
                                ->addClass('home-link')
                                ->addParentClass('activeed')
                                ->setActive(request()->is('submenu1'))
                        )
                        ->add(
                            Link::to('/submenu2', 'submenu2')
                                ->addClass('home-link')
                                ->setActive(request()->is('submenu2'))
                        )
                    )

                    // Menu About
                    ->add(
                        Link::to('/about', 'About')
                            ->setActive(request()->is('about'))
                    )

                    // Menu Contact
                    ->add(
                        Link::to('/contact', 'Contact')
                            ->addClass('block')
                            ->addParentClass('float-right')
                            ->setActive(request()->is('contact'))
                    )

                    ->wrap('div', ['class' => 'wrapper']);
    }
}
