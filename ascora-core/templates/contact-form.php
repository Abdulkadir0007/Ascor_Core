<?php
/**
 * Contact form template (WordPress-native wp_mail)
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

$opts               = get_option('ascora', []);
$submit_button_type = isset($opts['swich_contact_form_submit']) && $opts['swich_contact_form_submit'] === 'animated' ? 'ascora' : 'primary';

// Handle submission
$mail_status = '';
if ('POST' === $_SERVER['REQUEST_METHOD'] && !empty($_POST['asubject']) && !empty($_POST['amesseg'])) :
    $name    = sanitize_text_field($_POST['aname'] ?? '');
    $email   = sanitize_email($_POST['aemail'] ?? '');
    $subject = sanitize_text_field($_POST['asubject'] ?? '');
    $message = sanitize_textarea_field($_POST['amesseg'] ?? '');
    $terms   = isset($_POST['trems']) ? 'Yes' : 'No';

    $to = sanitize_email($opts['to-email'] ?? '');
    if (!$to) :
        $mail_status = 'no-recipient';
    elseif (empty($name) || empty($email)) :
        $mail_status = 'empty-fields';
    else :
        // Build mail
        $site_name = get_bloginfo('name');
        $site_url  = home_url();

        $email_subject = sprintf(__('Contact Form: %s', 'ascora-core'), $subject);

        // HTML body
        ob_start(); ?>
<div
    style="max-width:600px;margin:30px auto;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.08);">
    <div style="background:#273c75;color:#fff;padding:24px 30px;text-align:center;">
        <h2 style="margin:0;font-size:24px;font-weight:800;">
            <?php echo esc_html($site_name); ?>
        </h2>
        <p style="margin:4px 0 0;font-size:14px;opacity:.9;">
            <?php esc_html_e('New contact form submission', 'ascora-core'); ?>
        </p>
    </div>
    <div style="padding:30px;color:#333;">
        <table width="100%" cellpadding="6">
            <tr>
                <td style="width:90px;font-weight:bold;">
                    <?php esc_html_e('Name', 'ascora-core'); ?>:
                </td>
                <td><?php echo esc_html($name); ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">
                    <?php esc_html_e('Email', 'ascora-core'); ?>:
                </td>
                <td><a
                        href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                </td>
            </tr>
            <tr>
                <td style="font-weight:bold;">
                    <?php esc_html_e('Subject', 'ascora-core'); ?>:
                </td>
                <td><?php echo esc_html($subject); ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;" valign="top">
                    <?php esc_html_e('Message', 'ascora-core'); ?>:
                </td>
                <td><?php echo nl2br(esc_html($message)); ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">
                    <?php esc_html_e('Terms', 'ascora-core'); ?>:
                </td>
                <td><?php echo esc_html($terms); ?></td>
            </tr>
        </table>
        <div style="margin-top:24px;font-size:12px;color:#666;border-top:1px solid #e5e5e5;padding-top:12px;">
            <?php esc_html_e('This is a notification that a contact form was submitted on your website', 'ascora-core'); ?>
            (<a href="<?php echo esc_url($site_url); ?>"
                style="color:#273c75;"><?php echo esc_html($site_name); ?></a>)
        </div>
    </div>
</div>
<?php
        $body = ob_get_clean();

        $mail = wp_mail(
            $to,
            $email_subject,
            $body,
            [
                'Content-Type: text/html; charset=UTF-8',
                'From: ' . $name . ' <' . $email . '>',
                'Reply-To: ' . $email,
            ]
        );

        $mail_status = $mail ? 'sent' : 'failed';
    endif;
endif;
?>

<div class="contact-form">
    <!-- Alerts -->
    <div class="alert">
        <?php if ($mail_status === 'sent') : ?>
        <div class="contact alert-success">
            <a href="">X</a>
            <p><i
                    class="fa-solid fa-circle-check"></i><?php esc_html_e('Thank you! Your message was sent successfully.', 'ascora-core'); ?>
            </p>
        </div>
        <?php elseif ($mail_status === 'failed') : ?>
        <div class="contact alert-error">
            <a href="">X</a>
            <p><i
                    class="fa-solid fa-triangle-exclamation"></i><?php esc_html_e('Sorry, there was an issue sending your message. Please try again later.', 'ascora-core'); ?>
            </p>
        </div>
        <?php elseif ($mail_status === 'no-recipient') : ?>
        <div class="contact alert-warning">
            <a href="">X</a>
            <p><i
                    class="fa-solid fa-triangle-exclamation"></i><?php esc_html_e('Recipient email address is not configured.', 'ascora-core'); ?>
            </p>
        </div>
        <?php elseif ($mail_status === 'empty-fields') : ?>
        <div class="contact alert-info">
            <a href="">X</a>
            <p><i
                    class="fa-solid fa-info-circle"></i><?php esc_html_e('Please fill in all required fields.', 'ascora-core'); ?>
            </p>
        </div>
        <?php endif; ?>

        <!-- Logged-in warning -->
        <?php if (is_user_logged_in() && empty($opts['to-email'])) : ?>
        <div class="contact alert-warning">
            <a href="">X</a>
            <p><i
                    class="fa-solid fa-triangle-exclamation"></i><?php esc_html_e('Form email address is not configured.', 'ascora-core'); ?>
            </p>
        </div>
        <?php endif; ?>
    </div>
    <!-- Form -->
    <form action="" method="post">
        <div class="contact-form">
            <div class="form-group name">
                <input type="text" name="aname" required>
                <label
                    for="aname"><?php esc_html_e('Name', 'ascora-core'); ?></label>
            </div>
            <div class="form-group email">
                <input type="email" name="aemail" required>
                <label
                    for="aemail"><?php esc_html_e('Email', 'ascora-core'); ?></label>
            </div>
            <div class="form-group subject">
                <input type="text" name="asubject">
                <label
                    for="asubject"><?php esc_html_e('Subject', 'ascora-core'); ?></label>
            </div>
        </div>
        <div class="text-area message">
            <textarea name="amesseg" id="message" rows="6" required></textarea>
            <label
                for="message"><?php esc_html_e('Message', 'ascora-core'); ?></label>
        </div>

        <?php if (!empty($opts['switch-notice']) && !is_user_logged_in()) : ?>
        <div class="d-block">
            <input type="checkbox" id="trems" name="trems" required>
            <label
                for="trems"><?php echo esc_html($opts['text-notice']); ?></label>
        </div>
        <?php endif; ?>

        <button type="submit"
            class="<?php echo esc_attr($submit_button_type); ?>-button">
            <?php esc_html_e('Send Message', 'ascora-core'); ?>
        </button>
    </form>
</div>