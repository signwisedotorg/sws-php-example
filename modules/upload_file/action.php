<?php

/*
  Copyright 2015 SignWise Corporation Ltd.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
*/

if (is_uploaded_file($_FILES['file']['tmp_name']) && (false === strpos($_FILES['file']['name'], '..'))) {
  $actionSuccess = move_uploaded_file($_FILES['file']['tmp_name'], $fileStoragePath . $_FILES['file']['name']);
}