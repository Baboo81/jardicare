

<script>
document.addEventListener("DOMContentLoaded", function() {
  window.klaroConfig = {
    elementID: 'klaro',
    privacyPolicy: '/privacy',
    default: true,
    storageMethod: 'cookie',
    cookieName: 'klaro',
    // définir tes services
    services: [
      {
        name: 'matomo',
        title: 'Statistiques (Matomo)',
        purposes: ['analytics'],
        default: false,
        cookies: ['_pk_id', '_pk_ses']
      },
      // ajouter marketing si besoin
    ],
    translations: {
      'fr': {
        consentModal: {
          title: 'Préférences cookies'
        }
      }
    },
    onPreferenceChange: function(preferences) {
      // preferences : objet où clé = nom du service (ex: matomo) => true/false
      let payload = {
        necessary: true,
        analytics: !!preferences.matomo,
        marketing: !!preferences.google // si tu ajoutes google
      };

      fetch("{{ route('cookie.consent') }}", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(payload)
      }).then(res => {
        // optional : recharger pour que les scripts s'ajoutent/suppr.
        location.reload();
      });
    }
  };

  klaro.run();
});
</script>
