<?php 

return [
    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeは、有効なURLではありません。',
    'after' => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフンと下線(\'-\',\'_\')が使用できます。',
    'alpha_num' => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array' => ':attributeには、配列を指定してください。',
    'before' => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeには、:minから、:maxまでの数字を指定してください。',
        'file' => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string' => ':attributeは、:min文字から:max文字にしてください。',
        'array' => ':attributeの項目は、:min個から:max個にしてください。',
    ],
    'boolean' => ':attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed' => ':attributeと:attribute確認が一致しません。',
    'date' => ':attributeは、正しい日付ではありません。',
    'date_equals' => ':attributeは:dateに等しい日付でなければなりません。',
    'date_format' => ':attributeの形式は、\':format\'と合いません。',
    'different' => ':attributeと:otherには、異なるものを指定してください。',
    'digits' => ':attributeは、:digits桁にしてください。',
    'digits_between' => ':attributeは、:min桁から:max桁にしてください。',
    'dimensions' => ':attributeの画像サイズが無効です',
    'distinct' => ':attributeの値が重複しています。',
    'email' => ':attributeは、有効なメールアドレス形式で指定してください。',
    'exists' => '選択された:attributeは、有効ではありません。',
    'file' => ':attributeはファイルでなければいけません。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'numeric' => ':attributeは、:valueより大きくなければなりません。',
        'file' => ':attributeは、:value KBより大きくなければなりません。',
        'string' => ':attributeは、:value文字より大きくなければなりません。',
        'array' => ':attributeの項目数は、:value個より大きくなければなりません。',
    ],
    'gte' => [
        'numeric' => ':attributeは、:value以上でなければなりません。',
        'file' => ':attributeは、:value KB以上でなければなりません。',
        'string' => ':attributeは、:value文字以上でなければなりません。',
        'array' => ':attributeの項目数は、:value個以上でなければなりません。',
    ],
    'image' => ':attributeには、画像を指定してください。',
    'in' => '選択された:attributeは、有効ではありません。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeには、整数を指定してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeはIPv4アドレスを指定してください。',
    'ipv6' => ':attributeはIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':attributeは、:valueより小さくなければなりません。',
        'file' => ':attributeは、:value KBより小さくなければなりません。',
        'string' => ':attributeは、:value文字より小さくなければなりません。',
        'array' => ':attributeの項目数は、:value個より小さくなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは、:value以下でなければなりません。',
        'file' => ':attributeは、:value KB以下でなければなりません。',
        'string' => ':attributeは、:value文字以下でなければなりません。',
        'array' => ':attributeの項目数は、:value個以下でなければなりません。',
    ],
    'max' => [
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'file' => ':attributeには、:max KB以下のファイルを指定してください。',
        'string' => ':attributeは、:max文字以下にしてください。',
        'array' => ':attributeの項目は、:max個以下にしてください。',
    ],
    'mimes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'file' => ':attributeには、:min KB以上のファイルを指定してください。',
        'string' => ':attributeは、:min文字以上にしてください。',
        'array' => ':attributeの項目は、:min個以上にしてください。',
    ],
    'not_in' => '選択された:attributeは、有効ではありません。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeには、数字を指定してください。',
    'present' => ':attributeが存在している必要があります。',
    'regex' => ':attributeには、有効な正規表現を指定してください。',
    'required' => ':attributeは、必ず指定してください。',
    'required_if' => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless' => ':otherが:values以外の場合、:attributeを指定してください。',
    'required_with' => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all' => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without' => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'numeric' => ':attributeには、:sizeを指定してください。',
        'file' => ':attributeには、:size KBのファイルを指定してください。',
        'string' => ':attributeは、:size文字にしてください。',
        'array' => ':attributeの項目は、:size個にしてください。',
    ],
    'starts_with' => ':attributeは、次のいずれかで始まる必要があります。:values',
    'string' => ':attributeには、文字を指定してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique' => '指定の:attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは、有効なURL形式で指定してください。',
    'uuid' => ':attributeは、有効なUUIDでなければなりません。',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'database_connection' => [
            'required' => 'MySQLサーバーに接続できません',
        ],
        'database_not_empty' => [
            'required' => 'データベースは空ではありません。 データベースを空にするか、指定してください <a href="./database">別のデータベース</a>。',
        ],
        'promo_code_not_valid' => [
            'required' => 'プロモーションコードが無効です',
        ],
        'smtp_valid' => [
            'required' => 'SMTPサーバーに接続できません',
        ],
        'yaml_parse_error' => [
            'required' => 'yamlを解析できません。 構文を確認してください',
        ],
        'file_not_found' => [
            'required' => 'ファイルが見つかりません。',
        ],
        'not_zip_archive' => [
            'required' => 'このファイルはzipパッケージではありません。',
        ],
        'zip_archive_unvalid' => [
            'required' => 'パッケージを読み取れません。',
        ],
        'custom_criteria_empty' => [
            'required' => 'カスタム基準は空にできません',
        ],
        'php_bin_path_invalid' => [
            'required' => '無効なPHP実行可能ファイル 再度確認してください。',
        ],
        'can_not_empty_database' => [
            'required' => '特定のテーブルを削除できません。データベースを手動でクリーンアップしてからやり直してください。',
        ],
        'can_not_create_database_tables' => [
            'required' => 'Cannot create certain tables. Please make sure you have full privileges on the database and try again.',
        ],
        'can_not_import_database_data' => [
            'required' => 'Cannot import all the app required data. Please try again.',
        ],
        'recaptcha_invalid' => [
            'required' => 'reCAPTCHAチェックが無効です。',
        ],
        'payment_method_not_valid' => [
            'required' => 'お支払い方法の設定に問題がありました。 再度確認してください。',
        ],
    ],
    'attributes' => [
        'gender' => '性別',
        'gender_id' => '性別',
        'name' => '名',
        'first_name' => 'ファーストネーム',
        'last_name' => '苗字',
        'user_type' => 'ユーザータイプ',
        'user_type_id' => 'ユーザータイプ',
        'country' => '国',
        'country_code' => '国',
        'phone' => '電話',
        'address' => '住所',
        'mobile' => 'モバイル',
        'sex' => '性別',
        'year' => '年',
        'month' => '月',
        'day' => '日',
        'hour' => '時',
        'minute' => '分',
        'second' => '秒',
        'username' => 'ユーザー名',
        'email' => '電子メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'g-recaptcha-response' => 'キャプチャ',
        'accept_terms' => '条項',
        'category' => 'カテゴリー',
        'category_id' => 'カテゴリー',
        'post_type' => '広告タイプ',
        'post_type_id' => '広告タイプ',
        'title' => 'タイトル',
        'body' => 'ボディ',
        'description' => '説明',
        'excerpt' => '抜粋',
        'date' => '年代',
        'time' => '時間',
        'available' => '利用可能',
        'size' => 'サイズ',
        'price' => '価格',
        'salary' => '給料',
        'contact_name' => '名',
        'location' => 'ロケーション',
        'admin_code' => 'ロケーション',
        'city' => 'シティ',
        'city_id' => 'シティ',
        'package' => 'パッケージ',
        'package_id' => 'パッケージ',
        'payment_method' => '支払方法',
        'payment_method_id' => '支払方法',
        'sender_name' => '名',
        'subject' => '件名',
        'message' => 'メッセージ',
        'report_type' => 'レポートタイプ',
        'report_type_id' => 'レポートタイプ',
        'file' => 'ファイル',
        'filename' => 'ファイル名',
        'picture' => '画像',
        'resume' => '履歴書',
        'login' => 'ログイン',
        'code' => 'コード',
        'token' => 'トークン',
        'comment' => 'コメント',
        'rating' => '評価',
        'locale' => 'ロケール',
        'currencies' => '通貨',
    ],
    'recaptcha' => 'The :attribute field is not correct.',
    'phone' => 'The :attribute field contains an invalid number.',
    'dumbpwd' => 'このパスワードはあまりにも一般的です。 もう一度試してください！',
    'phone_number' => 'あなたの電話番号は無効です。',
    'required_package_id' => '続行するにはプレミアム広告オプションを選択する必要があります。',
    'required_payment_method_id' => '続行するには支払い方法を選択する必要があります。',
    'blacklist_email_rule' => 'このメールアドレスはブラックリストに登録されています。',
    'blacklist_domain_rule' => 'あなたのメールアドレスのドメインはブラックリストに載っています。',
    'blacklist_ip_rule' => 'The :attribute must be a valid IP address.',
    'blacklist_word_rule' => 'The :attribute contains a banned words or phrases.',
    'blacklist_title_rule' => 'The :attribute contains a banned words or phrases.',
    'between_rule' => 'The :attribute must be between :min and :max characters.',
    'username_is_valid_rule' => 'The :attribute field must be an alphanumeric string.',
    'username_is_allowed_rule' => 'The :attribute is not allowed.',
    'locale_of_language_rule' => 'The :attribute field is not valid.',
    'locale_of_country_rule' => 'The :attribute field is not valid.',
    'currencies_codes_are_valid_rule' => 'The :attribute field is not valid.',
    'custom_field_unique_rule' => 'The :field_1 have this :field_2 assigned already.',
    'custom_field_unique_rule_field' => 'The :field_1 is already assigned to this :field_2.',
    'custom_field_unique_children_rule' => 'A child :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_children_rule_field' => 'The :field_1 is already assign to one :field_2 of this :field_2.',
    'custom_field_unique_parent_rule' => 'The parent :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_parent_rule_field' => 'The :field_1 is already assign to the parent :field_2 of this :field_2.',
    'attributes.tags' => 'Tags',
    'mb_alphanumeric_rule' => 'Please enter a valid content in the :attribute field.',
    'attributes.from_name' => 'name',
    'attributes.from_email' => 'email',
    'attributes.from_phone' => 'phone',
    'date_is_valid_rule' => 'The :attribute field does not contain a valid date.',
    'date_future_is_valid_rule' => 'The date of :attribute field need to be in the future.',
    'date_past_is_valid_rule' => 'The date of :attribute field need to be in the past.',
    'video_link_is_valid_rule' => 'The :attribute field does not contain a valid (Youtube or Vimeo) video link.',
];
