/**
 *  Copyright 2014-2015 MongoDB, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

#include "hphp/runtime/ext/extension.h"
#include "hphp/runtime/vm/native-data.h"

#include "UtcDatetime.h"

namespace HPHP {

const StaticString s_MongoBsonUtcDatetime_className("MongoDB\\BSON\\UtcDatetime");

const StaticString s_MongoBsonUtcDatetime_milliseconds("milliseconds");

Object HHVM_METHOD(MongoDBBsonUtcDatetime, toDateTime)
{
	//int64_t milliseconds = _this.o_get(s_MongoBsonUtcDatetime_milliseconds, false, s_MongoBsonUtcDatetime_className).toInt64();

	return NULL;
}

}
