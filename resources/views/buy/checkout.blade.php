    <p>決済ページへリダイレクトします。</p>
<script>
    const publicKey = '{{ $publicKey }}'
    const stripe = Stripe(publickey)

    window.onload = function(){
        stripe.redirectToCheckout({
            sessionId:'{{ $session->id }}'
        }).then(function(result){
            window.location.href = '{{ route('products.index')}}';
        });
    }
</script>
