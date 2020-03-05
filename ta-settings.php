<h1><?php _e('Twitter Information', 'consideratecoder'); ?></h1>
<form method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="blogname"><?php _e('Consumer Key', 'consideratecoder'); ?></label></th>
                <td><input name="ta_consumer_key" id="ta_consumer_key" value="<?php if(get_option('ta_consumer_key')) echo get_option('ta_consumer_key'); ?>" class="regular-text" type="text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="blogname"><?php _e('Consumer Secret', 'consideratecoder'); ?></label></th>
                <td><input name="ta_consumer_secret" id="ta_consumer_secret" value="<?php if(get_option('ta_consumer_secret')) echo get_option('ta_consumer_secret'); ?>" class="regular-text" type="text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="blogname"><?php _e('Access Token', 'consideratecoder'); ?></label></th>
                <td><input name="ta_access_token" id="ta_access_token" value="<?php if(get_option('ta_access_token')) echo get_option('ta_access_token'); ?>" class="regular-text" type="text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="blogname"><?php _e('Access Token Secret', 'consideratecoder'); ?></label></th>
                <td><input name="ta_access_token_secret" id="ta_access_token_secret" value="<?php if(get_option('ta_access_token_secret')) echo get_option('ta_access_token_secret'); ?>" class="regular-text" type="text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="blogname"><?php _e('Number of Tweets', 'consideratecoder'); ?></label></th>
                <td><input name="ta_no_of_tweets" id="ta_no_of_tweets" value="<?php if(get_option('ta_no_of_tweets')) echo get_option('ta_no_of_tweets'); ?>" class="regular-text" type="number"></td>
            </tr>
        </tbody>
    </table>
    <p class="submit">
        <input name="ta-submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'consideratecoder'); ?>" type="submit">
    </p>
</form>



