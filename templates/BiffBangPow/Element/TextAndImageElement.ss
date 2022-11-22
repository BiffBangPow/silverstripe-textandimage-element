<div class="container">
    <div class="row<% if $ImageFirst %> flex-row-reverse<% end_if %>">
        <div class="py-4 textimage-text col-12 col-lg flex-lg-grow">
            <div class="text">
                <% if $ShowTitle %>
                    <h3 class="mb-4 title">$Title</h3>
                <% end_if %>
                <div>$Text</div>
                <% if $CTAType != 'None' %>
                    <div class="cta">
                        <p>
                            <a href="$CTALink" class="cta-link btn btn-secondary"
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
                    <img alt="$Title" class="img-fluid lazyload" src="$URL" loading="lazy" width="$Width"
                         height="$Height">
                <% end_with %>
            </picture>
        </div>
    </div>
</div>
