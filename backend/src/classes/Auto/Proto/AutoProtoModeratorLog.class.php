<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoModeratorLog extends AbstractProtoClass
	{
		protected function makePropertyList()
		{
			return array(
				'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'ModeratorLog', 8, true, true, false, null, null),
				'board' => LightMetaProperty::fill(new LightMetaProperty(), 'board', 'board_id', 'identifier', 'Board', null, true, false, false, 1, 3),
				'eventDate' => LightMetaProperty::fill(new LightMetaProperty(), 'eventDate', 'event_date', 'timestamp', 'Timestamp', null, true, true, false, null, null),
				'eventUser' => LightMetaProperty::fill(new LightMetaProperty(), 'eventUser', 'event_user_id', 'identifier', 'User', null, true, false, false, 1, 3),
				'eventType' => LightMetaProperty::fill(new LightMetaProperty(), 'eventType', 'event_type_id', 'enum', 'ModeratorLogEventType', null, true, false, false, 1, 3)
			);
		}
	}
?>