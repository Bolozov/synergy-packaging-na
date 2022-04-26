 <div id="sidebar-menu">
     <!-- Left Menu Start -->
     <ul class="metismenu list-unstyled" id="side-menu">
         <li class="menu-title">Main</li>

         <li class="{{ Request::is('admin/dashboard*') ? 'mm-active' : '' }}">
             <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                 <i class="ti-home"></i> <span>Tableau de bord</span>
             </a>
         </li>
         <li class="menu-title">Gestion de contenu</li>
         <li class="{{ Request::is('admin/references*') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.references.index') }}"><i class="ti-bookmark-alt"></i>
                 <span>
                     @lang('models/references.plural')
                 </span>
             </a>
         </li>
         <li class="{{ Request::is('admin/expertises*') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.expertises.index') }}"><i class="ti-view-grid"></i>
                 <span>
                     @lang('models/expertises.plural')
                 </span>
             </a>
         </li>
         <li class="{{ Request::is('admin/projects*') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.projects.index') }}"><i class="ti-view-grid"></i>
                 <span>
                     Nos Références
                 </span>
             </a>
         </li>
         <li class="{{ Request::is('admin/testimonials**') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.testimonials.index') }}"><i class="ti-user"></i>
                 <span>
                     Témoignages
                 </span>
             </a>
         </li>
         <li class="{{ Request::is('admin/clientCarousels***') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.clientCarousels.index') }}"><i
                     class="ti-medall"></i>
                 <span>
                     Partenaires
                 </span>
             </a>
         </li>
         <li class="{{ Request::is('admin/candidates*') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.candidates.index') }}">
                 <i class="ti-briefcase"></i>
                 <span>Candidatures</span>
             </a>
         </li>
         <li class="{{ Request::is('admin/subscribers*') ? 'mm-active' : '' }}">
             <a class="waves-effect" href="{{ route('admin.subscribers.index') }}">
                 <i class="mdi mdi-email"></i>
                 <span>Abonnés</span>
             </a>
         </li>

         <li class="menu-title">Réglages</li>
         <li class="{{ Request::is('admin/settings*') ? 'mm-active' : '' }}">
             <a href="{{ route('admin.settings.index') }}" class="waves-effect">
                 <i class="mdi mdi-cog-outline"></i>
                 <span>Informations</span>
             </a>
         </li>

     </ul>
 </div>
