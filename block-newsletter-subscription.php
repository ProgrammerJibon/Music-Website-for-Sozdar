<div class="newsletter settings_main admin_page">
    <div class="join-email-title">
        <span>
            Join Us & Get Updates on Special Events 
        </span>
    </div>
    <div>
        <label>
            <form method="POST" onsubmit="return false" style="display: flex; align-items:center" class="settings_item ">
                <input type="email" required name="newsletter_subscription" placeholder="Email address" required style="padding-left: 8px;" id="newsletter_subscription" class="change_text">
                <button type="submit" style="width: max-content;" onclick="newsletterSubscription1(document.querySelector('input#newsletter_subscription'), this)">
                    <div>Subscribe</div>
                </button>
            </form>
        </label>
    </div>
</div>