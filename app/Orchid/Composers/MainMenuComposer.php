<?php

declare(strict_types=1);

namespace App\Orchid\Composers;

use Orchid\Platform\Menu;
use Orchid\Platform\ItemMenu;
use Orchid\Platform\Dashboard;

class MainMenuComposer
{
    /**
     * @var Dashboard
     */
    private $dashboard;

    /**
     * MenuComposer constructor.
     *
     * @param Dashboard $dashboard
     */
    public function __construct(Dashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     * Registering the main menu items.
     */
    public function compose()
    {
        // Profile
        $this->dashboard->menu
            ->add(Menu::PROFILE,
                ItemMenu::label('Notifications')
                    ->icon('icon-user')
            )
            ->add(Menu::PROFILE,
                ItemMenu::label('Notifications')
                    ->icon('icon-exclamation')
                    ->route('platform.notifications')
                    ->badge(function () {
                        return 6;
                    })
            );



        // Main
        $this->dashboard->menu
        
            ->add(Menu::MAIN,
                ItemMenu::label('Dashboard')
                    ->icon('icon-home')
                    ->route('platform.main')
                    ->sort(1)
                   
            )

            ->add(Menu::MAIN, 
                ItemMenu::label('Employee Database')
                ->icon('icon-user')    
                ->route('platform.employee')
                ->sort(2)
            )

            ->add(Menu::MAIN, 
            ItemMenu::label('Payroll')
            ->icon('icon-dollar')    
            ->route('platform.payroll')
            ->sort(3)
            )

            ->add(Menu::MAIN, 
            ItemMenu::label('Time off Tracker')
            ->icon('icon-clock')    
            ->route('platform.timeoff')
            ->sort(4)
            )
            
            ;

      

               

            
            // ->add(Menu::MAIN,
            //     ItemMenu::label('Payroll')
            //         ->slug('example-menu')
            //         ->icon('icon-code')
            //         ->childs()
            // )
            // ->add('example-menu',
            //     ItemMenu::label('Empty sub item 1')
            //         ->icon('icon-bag')
            // )
            // ->add('example-menu',
            //     ItemMenu::label('Empty sub item 2')
            //         ->icon('icon-heart')
            //         ->title('Separate')
            // );

            $this->dashboard->menu
            ->add(Menu::MAIN,
                ItemMenu::label('Emails')
                    ->icon('icon-envelope-letter')
                    ->route('platform.email')
                    ->title('Broadcast')
            );
    }
}
