<div class="nav-fold">
	<a href="profile.html">
	    <span class="pull-left">
	      <img src="{{ Gravatar::fallback('/assets/images/a0.jpg')->get(Auth::user()->email) }}" alt="..." class="w-40 img-circle">
	    </span>
	    <span class="clear hidden-folded p-x">
	      <span class="block _500">{{ Auth::user()->name }}</span>
	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>آنلاین</small>
	    </span>
	</a>
</div>