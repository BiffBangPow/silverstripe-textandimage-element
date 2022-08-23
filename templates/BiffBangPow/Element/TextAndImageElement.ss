<div class="py-4 py-xl-7">
    <div class="container">
        <div class="row<% if $ImageFirst %> imagefirst<% end_if %>">
            <div class="py-4 textimage-text">
                <div class="text">
                    <% if $ShowTitle %>
                        <h3 class="mb-4 title">$MarkdownText.Title.RAW</h3>
                    <% end_if %>
                    <div>$Text</div>
                    <% if $CTAType != 'None' %>
                        <div class="cta">
                            <p>
                                <a href="$CTALink" class="cta-link"
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
            <div class="textimage-image $ImageWidthClass">
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
</div>
