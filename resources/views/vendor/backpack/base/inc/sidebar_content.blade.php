{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('email') }}"><i class="nav-icon la la-envelope"></i> بريد المصالح الخارجية</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('imail') }}"><i class="nav-icon la la-inbox"></i> بريد المديرية</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tteacher') }}"><i class="nav-icon la la-chalkboard-teacher"></i> الاساتذة المستخلفين</a></li>
