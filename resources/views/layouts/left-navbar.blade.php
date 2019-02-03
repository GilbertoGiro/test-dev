<div class="menu">
    <div class="menu-body">
        <div class="menu-profile-image text-center pt-3">
            <figure>
                <img src="{{ asset('img/eu.png') }}" class="rounded-circle" width="120px">
                <figcaption class="mt-2">
                    Gilberto Giro Resende
                </figcaption>
            </figure>
        </div>
        <div class="menu-nav-items mt-4">
            <ul>
                <a href="">
                    <li class="{{ (!empty($home)) ? 'active' : '' }}">
                        O que deve ser feito
                        <i class="fa fa-book"></i>
                    </li>
                </a>
                <a href="{{ route('ticket.index') }}">
                    <li class="{{ (!empty($ticketRoute)) ? 'active' : '' }}">
                        Tickets
                        <i class="fa fa-ticket-alt"></i>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>