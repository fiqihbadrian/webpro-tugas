</main>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-text">
            <span>© 2026 Fiqih Badrian</span>
            <span class="footer-divider">|</span>
            <span>Themes By TemplateRise</span>
        </div>
    </div>
</footer>
<!-- End Main Content Wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script src="<?= base_url('public/assets/assets/js/script.js') ?>"></script>
<script>
    // Toggle sidebar on mobile and desktop
    document.getElementById('menuToggle')?.addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('collapsed');
    });
</script>
<!-- Data Table -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>
</body>

</html>