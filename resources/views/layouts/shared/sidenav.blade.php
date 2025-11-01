<div class="app-menu">

    <a href="{{ route('home') }}" class="logo-box border-b border-gray-200 dark:border-gray-700">
        <!-- Light Logo -->
        <div class="logo-light">
            <img src="/images/logo.png" class="logo-lg h-16" alt="Light logo">
            <img src="/images/logo-sm.png" class="logo-sm h-8" alt="Small logo">
        </div>

        <!-- Dark Logo -->
        <div class="logo-dark">
            <img src="/images/logo-dark.png" class="logo-lg h-16" alt="Dark logo">
            <img src="/images/logo-sm.png" class="logo-sm h-8" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5 z-50">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="ri-checkbox-blank-circle-line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="scrollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-home-4-line"></i>
                    </span>
                    <span class="menu-text"> Dashboard </span>
                    <span class="badge bg-success rounded-full">2</span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-text">Admin</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('any', 'dashboard-analytics') }}" class="menu-link">
                            <span class="menu-text">Analytics</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('any', 'index') }}" class="menu-link">
                            <span class="menu-text">Ecommerce</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'calendar']) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-calendar-event-line"></i>
                    </span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'chat']) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-message-3-line"></i>
                    </span>
                    <span class="menu-text"> Chat </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-mail-line"></i>
                    </span>
                    <span class="menu-text"> Email </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['email', 'inbox']) }}" class="menu-link">
                            <span class="menu-text">Inbox</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['email', 'read-email']) }}" class="menu-link">
                            <span class="menu-text">Read Email</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-task-line"></i>
                    </span>
                    <span class="menu-text"> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['tasks', 'list']) }}" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tasks', 'details']) }}" class="menu-link">
                            <span class="menu-text">Details</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'kanban']) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-list-check-3"></i>
                    </span>
                    <span class="menu-text">Kanban Board</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'file-manager']) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-folder-2-line"></i>
                    </span>
                    <span class="menu-text"> File Manager </span>
                </a>
            </li>

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="ri-pages-line"></i></span>
                    <span class="menu-text"> Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'starter']) }}" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'profile']) }}" class="menu-link">
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'timeline']) }}" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'invoice']) }}" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'faqs']) }}" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'pricing']) }}" class="menu-link">
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'maintenance']) }}" class="menu-link">
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-shield-user-line"></i>
                    </span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'login']) }}" class="menu-link">
                            <span class="menu-text">Login</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'login-2']) }}" class="menu-link">
                            <span class="menu-text">Login 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'register']) }}" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'register-2']) }}" class="menu-link">
                            <span class="menu-text">Register 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'logout']) }}" class="menu-link">
                            <span class="menu-text">Logout</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'logout-2']) }}" class="menu-link">
                            <span class="menu-text">Logout 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'recoverpw']) }}" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'recoverpw-2']) }}" class="menu-link">
                            <span class="menu-text">Recover Password 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'lock-screen']) }}" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'lock-screen-2']) }}" class="menu-link">
                            <span class="menu-text">Lock Screen 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'confirm-mail']) }}" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'confirm-mail-2']) }}" class="menu-link">
                            <span class="menu-text">Confirm Mail 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-error-warning-line"></i>
                    </span>
                    <span class="menu-text"> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['error', 'error-404']) }}" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['error', 'error-404-alt']) }}" class="menu-link">
                            <span class="menu-text">Error 404-alt</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['error', 'error-500']) }}" class="menu-link">
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-layout-line"></i>
                    </span>
                    <span class="menu-text"> Layout </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'hover-view']) }}" target="_blank"
                            class="menu-link">
                            <span class="menu-text">Hovered Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'icon-view']) }}" target="_blank"
                            class="menu-link">
                            <span class="menu-text">Icon View Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'compact-view']) }}" target="_blank"
                            class="menu-link">
                            <span class="menu-text">Compact Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'mobile-view']) }}" target="_blank"
                            class="menu-link">
                            <span class="menu-text">Mobile View Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'hidden']) }}" target="_blank" class="menu-link">
                            <span class="menu-text">Hidden Menu</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-briefcase-line"></i>
                    </span>
                    <span class="menu-text"> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'accordions']) }}" class="menu-link">
                            <span class="menu-text">Accordions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'alerts']) }}" class="menu-link">
                            <span class="menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'avatars']) }}" class="menu-link">
                            <span class="menu-text">Avatars</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'buttons']) }}" class="menu-link">
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'badges']) }}" class="menu-link">
                            <span class="menu-text">Badges</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'breadcrumbs']) }}" class="menu-link">
                            <span class="menu-text">Breadcrumb</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'cards']) }}" class="menu-link">
                            <span class="menu-text">Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'collapse']) }}" class="menu-link">
                            <span class="menu-text">Collapse</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'dismissible']) }}" class="menu-link">
                            <span class="menu-text">Dismissible</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'dropdowns']) }}" class="menu-link">
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'progress']) }}" class="menu-link">
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'skeleton']) }}" class="menu-link">
                            <span class="menu-text">Skeleton</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'spinners']) }}" class="menu-link">
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'list-group']) }}" class="menu-link">
                            <span class="menu-text">List Group</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'ratio']) }}" class="menu-link">
                            <span class="menu-text">Ratio</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'tabs']) }}" class="menu-link">
                            <span class="menu-text">Tab</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'modals']) }}" class="menu-link">
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'offcanvas']) }}" class="menu-link">
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'popovers']) }}" class="menu-link">
                            <span class="menu-text">Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'tooltips']) }}" class="menu-link">
                            <span class="menu-text">Tooltips</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'typography']) }}" class="menu-link">
                            <span class="menu-text">Typography</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-stack-line"></i>
                    </span>
                    <span class="menu-text"> Extended UI </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'swiper']) }}" class="menu-link">
                            <span class="menu-text">Swiper</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'nestable']) }}" class="menu-link">
                            <span class="menu-text">Nestable List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'ratings']) }}" class="menu-link">
                            <span class="menu-text">Ratings</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'player']) }}" class="menu-link">
                            <span class="menu-text">Player</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'scrollbar']) }}" class="menu-link">
                            <span class="menu-text">Scrollbar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'tippy-tooltips']) }}" class="menu-link">
                            <span class="menu-text">Tippy Tooltip</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-service-line"></i>
                    </span>
                    <span class="menu-text"> Icons </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['icons', 'remixicons']) }}" class="menu-link">
                            <span class="menu-text">Remixicons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['icons', 'lucide']) }}" class="menu-link">
                            <span class="menu-text">Lucide</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-survey-line"></i>
                    </span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'elements']) }}" class="menu-link">
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'advanced']) }}" class="menu-link">
                            <span class="menu-text">Advanced</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'editors']) }}" class="menu-link">
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'file-uploads']) }}" class="menu-link">
                            <span class="menu-text">File Uploads</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'validation']) }}" class="menu-link">
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'layout']) }}" class="menu-link">
                            <span class="menu-text">Form Layout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-table-line"></i>
                    </span>
                    <span class="menu-text"> Tables </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['tables', 'basic']) }}" class="menu-link">
                            <span class="menu-text">Basic Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tables', 'datatables']) }}" class="menu-link">
                            <span class="menu-text">Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-bar-chart-line"></i>
                    </span>
                    <span class="menu-text"> Apex Charts </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-area']) }}" class="menu-link">
                            <span class="menu-text">Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-bar']) }}" class="menu-link">
                            <span class="menu-text">Bar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-bubble']) }}" class="menu-link">
                            <span class="menu-text">Bubble</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-candlestick']) }}" class="menu-link">
                            <span class="menu-text">Candlestick</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-column']) }}" class="menu-link">
                            <span class="menu-text">Column</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-heatmap']) }}" class="menu-link">
                            <span class="menu-text">Heatmap</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-line']) }}" class="menu-link">
                            <span class="menu-text">Line</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-mixed']) }}" class="menu-link">
                            <span class="menu-text">Mixed</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-timeline']) }}" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-boxplot']) }}" class="menu-link">
                            <span class="menu-text">Boxplot</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-treemap']) }}" class="menu-link">
                            <span class="menu-text">Treemap</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-pie']) }}" class="menu-link">
                            <span class="menu-text">Pie</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-radar']) }}" class="menu-link">
                            <span class="menu-text">Radar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-radialbar']) }}" class="menu-link">
                            <span class="menu-text">RadialBar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-scatter']) }}" class="menu-link">
                            <span class="menu-text">Scatter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-polar-area']) }}" class="menu-link">
                            <span class="menu-text">Polar Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'apex-sparklines']) }}" class="menu-link">
                            <span class="menu-text">Sparklines</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-pie-chart-line"></i>
                    </span>
                    <span class="menu-text"> Chartjs </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'chartjs-area']) }}" class="menu-link">
                            <span class="menu-text">Area</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'chartjs-bar']) }}" class="menu-link">
                            <span class="menu-text">Bar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'chartjs-line']) }}" class="menu-link">
                            <span class="menu-text">Line</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['charts', 'chartjs-other']) }}" class="menu-link">
                            <span class="menu-text">Other</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-treasure-map-line"></i>
                    </span>
                    <span class="menu-text"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['maps', 'vector']) }}" class="menu-link">
                            <span class="menu-text">Vector Maps</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['maps', 'google']) }}" class="menu-link">
                            <span class="menu-text">Google Maps</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-share-line"></i>
                    </span>
                    <span class="menu-text"> Level </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-text">Item 1</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-text">Item 2</span>
                            <span class="badge bg-info rounded-md">New</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-flag-2-line"></i>
                    </span>
                    <span class="menu-text"> Badge Items </span>
                    <span class="badge bg-danger rounded-md">Hot</span>
                </a>
            </li>
        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->
