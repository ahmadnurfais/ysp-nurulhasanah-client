jQuery(function ($) {
  // Function to handle changes for megamenu checkbox
  $('body').on('change', '.megamenu-enable-oncheck', function (e) {
    var megamenu_enable = $(this).closest('.top_badge_megamenu_box');
    if (this.checked) {
      megamenu_enable.find('.megamenu_enabledisable_box').removeClass('hidden-field');
      megamenu_enable.find('.notmegamenu_enabledisable_box').addClass('hidden-field');
    } else {
      megamenu_enable.find('.megamenu_enabledisable_box').addClass('hidden-field');
      megamenu_enable.find('.notmegamenu_enabledisable_box').removeClass('hidden-field');
    }
  });

  // Function to handle changes for show icon checkbox
  $('body').on('change', '.show-icon-enable-oncheck', function (e) {
    var showicon_enable = $(this).closest('.admeniicon_entire_box');
    if (this.checked) {
      showicon_enable.find('.showiconorimage').removeClass('hidden-field');
      showicon_enable.find('.no_showiconorimage').addClass('hidden-field');
    } else {
      showicon_enable.find('.showiconorimage').addClass('hidden-field');
      showicon_enable.find('.no_showiconorimage').removeClass('hidden-field');
    }
  });

  // Function to handle changes for badge checkbox
  $('body').on('change', '.badge-enable-oncheck', function (e) {
    var badge_enable = $(this).closest('.top_badge_megamenu_box');
    if (this.checked) {
      badge_enable.find('.badge_enabledisable_box').removeClass('hidden-field');
    } else {
      badge_enable.find('.badge_enabledisable_box').addClass('hidden-field');
    }
  });

  /* Menu */
  if ($('.risehandmenubger-color-box').length > 0) {
    $('.risehandmenubger-color-box').wpColorPicker();
  }

  // Set variables for image upload
  var frame,
    metaBox = $('.jt-bg-image-upload-wrapper'),
    addImgLink = metaBox.find('.upload-custom-img'),
    delImgLink = metaBox.find('.delete-custom-img');

  // Function to handle adding image
  addImgLink.on('click', function (event) {
    event.preventDefault();

    var addImgLink1 = $(this).closest('.jt-bg-image-upload-wrapper').find('.upload-custom-img');
    var delImgLink1 = $(this).closest('.jt-bg-image-upload-wrapper').find('.delete-custom-img');
    var imgContainer = $(this).closest('.jt-bg-image-upload-wrapper').find('.custom-img-container');
    var imgIdInput = $(this).closest('.jt-bg-image-upload-wrapper').find('.risehand-img-menu-id');

    // Create a new media frame
    frame = wp.media({
      title: 'Select or Upload Media Of Your Chosen Persuasion',
      button: {
        text: 'Use this media'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });

    // When an image is selected in the media frame...
    frame.on('select', function () {
      // Get media attachment details from the frame state
      var attachment = frame.state().get('selection').first().toJSON();

      // Send the attachment URL to our custom image input field.
      imgContainer.html('<img src="' + attachment.url + '" alt="" style="max-width:100%;"/>');

      // Send the attachment id to our hidden input
      imgIdInput.val(attachment.id);

      // Hide the add image link
      addImgLink1.addClass('hidden');

      // Unhide the remove image link
      delImgLink1.removeClass('hidden');

      frame.close();
    });

    // Open the modal on click
    frame.open();
  });

  // Function to handle deleting image
  delImgLink.on('click', function (event) {
    event.preventDefault();

    var addImgLink1 = $(this).closest('.jt-bg-image-upload-wrapper').find('.upload-custom-img');
    var delImgLink1 = $(this).closest('.jt-bg-image-upload-wrapper').find('.delete-custom-img');
    var imgContainer = $(this).closest('.jt-bg-image-upload-wrapper').find('.custom-img-container');
    var imgIdInput = $(this).closest('.jt-bg-image-upload-wrapper').find('.risehand-img-menu-id');

    // Clear out the preview image
    imgContainer.html('');

    // Un-hide the add image link
    addImgLink1.removeClass('hidden');

    // Hide the delete image link
    delImgLink1.addClass('hidden');

    // Delete the image id from the hidden input
    imgIdInput.val('');
  });
});
