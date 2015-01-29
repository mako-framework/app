<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => '%1$s必填',
	'min_length'               => '%1$s至少有%2$s个字符长度',
	'max_length'               => '%1$s必须小于%2$s个字符长度',
	'exact_length'             => '%1$s必须等于%2$s个字符长度',
	'less_than'                => '%1$s长度必须小于%2$s',
	'less_than_or_equal_to'    => '%1$s长度必须小于或等于%2$s',
	'greater_than'             => '%1$s长度必须大于%2$s',
	'greater_than_or_equal_to' => '%1$s长度必须大于或等于%2$s',
	'between'                  => '%1$s必须在%2$s和%3$s之间',
	'match'                    => '%1$s和%2$s必须相同',
	'different'                => '%1$s和%2$s必须不相同',
	'regex'                    => '%1$s不符合指定格式',
	'integer'                  => '%1$s必须是整数',
	'float'                    => '%1$s必须是浮点数',
	'natural'                  => '%1$s必须是个自然数',
	'natural_non_zero'         => '%1$s必须是个不为零的自然数',
	'hex'                      => '%1$s必须是个十六进制数',
	'alpha'                    => '%1$s必须全部是字母',
	'alpha_unicode'            => '%1$s必须全部是字母',
	'alphanumeric'             => '%1$s只能由数字或者字母组成',
	'alphanumeric_unicode'     => '%1$s只能由数字或者字母组成',
	'alpha_dash'               => '%1$s只能由数字、字母或者破折号组成',
	'alpha_dash_unicode'       => '%1$s只能由数字、字母或者破折号组成',
	'email'                    => '%1$s必须是一个有效的电子邮件地址',
	'email_domain'             => '%1$s必须是一个有效的电子邮件地址',
	'url'                      => '%1$s必须是个有效的网址',
	'ip'                       => '%1$s必须是个有效的ip地址',
	'in'                       => '%1$s只能从有效的选项中选择一个',
	'not_in'                   => '%1$s不是一个有效的值',
	'date'                     => '%1$s必须是一个有效的时间',
	'before'                   => '%1$s对应时间必须早于%3$s',
	'after'                    => '%1$s对应时间必须晚于%3$s',
	'token'                    => '无效的安全令牌',
	'uuid'                     => '无效的UUID',
	'unique'                   => '%1$s必须是唯一的',
	'exists'                   => '%1$s并不存在',

	/**
	 * Custom overrides.
	 */

	'overrides' =>
	[
		'fieldnames' =>
		[

		],
		'messages' =>
		[

		],
	],
];

