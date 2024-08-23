<div class="navbar  lg:px-20 bg-neutral">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl text-white">Autotechno</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-white">
            <li><a>About</a></li>
            <li><a>Services</a></li>
            <li><a>Products</a></li>
            <li><a>News</a></li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2 text-black">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
    <div class="navbar-end ">
        <a class="btn hidden lg:flex">Contact</a>
        <div class="block lg:hidden" id="burgerMenuBtn">
            <img src="{{ asset('icons/burgerMenu.svg') }}" alt="Burger Menu" width="40" class="cursor-pointer">
        </div>
    </div>


</div>
<x-sidebar></x-sidebar>

