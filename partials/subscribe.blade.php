<div class="footerNewsletter">
    <h3 class="footerNewsletterTitle">Newsletter</h3>
    <div class="bingoContent">
        <form action="{{ @$mailing->action }}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="formNewsletter clearfix">
            <div class="form-group">
                <input type="email" value="" placeholder="email@example.com" name="EMAIL" id="mail" class="form-control" aria-label="email@example.com" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
                <button id="subscribe" class="btn btnNewsletter" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
                    <i class="pe-7s-paper-plane"></i>
                    <span>Subscribe</span>
                </button>
            </div>
        </form>
    </div>
</div>