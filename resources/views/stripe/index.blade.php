
<form action="result" method="POST">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_u33UdKbbN9KUeWbQi75otziL"
    data-amount="999"
    data-name="leonardo"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>