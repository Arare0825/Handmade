    <p>決済ページへリダイレクトします。</p>
    <script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey = '{{ $publickey }}'
    const stripe = Stripe(publickey)

    window.onload = function(){
        stripe.redirectToCheckout({
            sessionId:'{{ $session->id }}'
        }).then(function(result){
            window.location.href = '{{ route('products.index')}}';
        });
    }
</script>
