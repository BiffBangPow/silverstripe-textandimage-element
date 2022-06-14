<div class="py-4 py-xl-7">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center py-4 <% if $TextPosition == 'Right' %>order-lg-2<% end_if %>">
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
            <div class="col-12 col-lg-6 d-flex align-items-center <% if $TextPosition == 'Right' %> order-lg-1<% end_if %>">
                <picture>
                    <source type="image/webp" srcset="$Image.ScaleMaxWidth(710).Format('webp').Link">
                    <img class="image w-100" title="$Image.Title" alt="$Image.Title" src="$Image.ScaleMaxWidth(710).Link" />
                </picture>
            </div>
        </div>
    </div>
</div>
