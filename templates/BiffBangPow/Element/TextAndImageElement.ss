<div class="container">
    <div class="row">
        <div class="py-4 textimage-text col-12 col-lg flex-lg-grow<% if $ImageFirst %> order-last<% end_if %>">
            <div class="text">
                <% if $ShowTitle %>
                    <h2 class="element-title mb-4">$Title</h2>
                <% end_if %>
                <div class="mb-4">$Text</div>
                <% if $CTAType != 'None' %>
                    <div class="cta">
                        <p>
                            <a href="$CTALink" class="cta-link btn btn-outline-primary"
                                <% if $CTAType == 'External' %>target="_blank" rel="noopener"
                                <% else_if $CTAType == 'Download' %>download
                                <% end_if %>>
                                $LinkText
                            </a>
                        </p>
                    </div>
                <% end_if %>
            </div>
        </div>
        <div class="textimage-image col-12 $ImageWidthClass">
            <picture>
                <% with $Image.ScaleWidth(1000) %>
                    <source type="image/webp" srcset="$Format('webp').URL">
                    <img alt="$Title" class="img-fluid" src="$URL" loading="lazy" width="$Width"
                         height="$Height">
                <% end_with %>
            </picture>
        </div>
    </div>
</div>
