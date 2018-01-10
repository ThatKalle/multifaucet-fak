<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo theme_dir(); ?>css/default.css" type="text/css" />

  <title><?php print($title); ?></title>
</head>
<body>

  <div class="app">

    <div class="content">

      <h1><?php print($title); ?></h1>
        <?php print($content); ?>
        <?php if(get_setting('donation_address')) { ?>
      <div class="donate">
        <p>Please consider donating: <strong class="address"></strong></p>
        <button class="btn copy">
          <svg class="copy-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <title>copy</title>
            <path d="M20 8v-8h-14l-6 6v18h12v8h20v-24h-12zM6 2.828v3.172h-3.172l3.172-3.172zM2 22v-14h6v-6h10v6l-6 6v8h-10zM18 10.828v3.172h-3.172l3.172-3.172zM30 30h-16v-14h6v-6h10v20z"></path>
          </svg>
          Copy
        </button>
        <textarea class="copy-select"><?php print(get_setting('donation_address')); ?></textarea>
      </div>
        <?php } ?>

    </div>

    <div class="powered-by">
      <a href="http://cur.lv/99zcp" title="http://www.unibia.net/crypto-faucet" target="_blank">MultiFaucet Beta v. 0.8.3</a>
    </div>
      <?php if(isset($stats)) { ?>
    <div class="stats">
      <p><?php print translate('average_payout'); ?>: <?php print($stats['average_payout']); ?></p>
      <p><?php print($stats['number_of_payouts']); ?> <?php print translate('payouts'); ?></p>
    </div>
      <?php } ?>

  </div>
  
  <script type="text/javascript">
    // Copy & Paste
    document.querySelector('.copy').addEventListener('click', function() {
      document.querySelector('.copy-select').select();

      try {
        var successful = document.execCommand('copy');
        document.querySelector('.address').classList.add('flash');
        setTimeout(function() {
          document.querySelector('.address').classList.remove('flash');
        }, 1000);
      } catch (err) {
        console.log('Oops, unable to copy');
      }
    });
  </script>
</body>
</html>