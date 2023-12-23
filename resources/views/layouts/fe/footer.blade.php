
<footer>
    <div class="footer-bottom">
        <div class="container">
            <img src="{{ asset('customer') }}/assets/images/payment.png" alt="payment method" class="payment-img">
            <p class="copyright">
                Copyright &copy; <a href="javascript:void(0)">GodeBook</a> all rights reserved.
            </p>
        </div>
    </div>
</footer>

<!-- LOGOUT -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!-- LOGOUT -->
