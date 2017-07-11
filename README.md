[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Brickftp/functions?utm_source=RapidAPIGitHub_BrickftpFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Brickftp Package
Secure FTP Server Hosting with Web Interface, FTP, SFTP, WebDAV, LDAP amp; File Sharing.
* Domain: brickftp.com
* Credentials: apiKey

## How to get credentials: 
1. Sign in [brickftp](https://brickftp.com/)
2. Navigate to API page.
3. Generate new API Key.

## Custom datatypes:
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]```
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## Webhook credentials
 Please use SDK to test this feature.
 1. Go to [RapidAPI](http://rapidapi.com)
 2. Log in or create an account
 3. Go to [My apps](https://dashboard.rapidapi.com/projects)
 4. Add new project with projectName to get your project Key

 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key

 
## Brickftp.getAllUsers
This endpoint lists all users on the current site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.getSingleUser
This endpoint shows a single user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each User. Each user is given an ID automatically upon creation.

## Brickftp.createUser
This endpoint creates a new user on the current site.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Your API key.
| subdomain            | String     | Your site’s subdomain.
| username             | String     | Username for the user. This is how the user will be displayed on the site.
| password             | String     | Password for the user. This property is write-only. It cannot be retrieved via the API.
| name                 | String     | Real name of the user. For your reference.
| email                | String     | E-Mail address of the user.
| notes                | String     | You may use this property to store any additional information you require. There are no restrictions on its formatting.
| groupIds             | List       | IDs of the Groups that this user is in.
| ftpPermission        | Boolean    | Allow user access via FTP/FTPS (port 21 or 990) interface.
| sftpPermission       | Boolean    | Allow user access via SFTP (port 22) interface.
| davPermission        | Boolean    | Allow user access via WebDAV (port 443) interface.
| restapiPermission    | Boolean    | Allow user access the REST API, via HTTP/HTTPS (port 80 or 443), and the desktop application.
| attachmentsPermission| Boolean    | Allow user to use Sharing tab in web interface to share files with anonymous users via a unique URL.
| selfManaged          | Boolean    | Allow user to change their password and user information via the web interface.
| requirePasswordChange| Boolean    | Require user to change their password at their next login. Note: requires restapi_permission to be true, as password changes can only occur via the web interface.
| allowedIps           | List       | List allowed IPs, one per line. You may specify a range in CIDR format, such as 192.168.1.0/27. Leave blank to allow all IPs. If you are also restricting IP addresses on the Site tab, users matching in either place will be allowed to log in.
| userRoot             | String     | Folder to show as the root when this user logs in via the FTP interface. Make sure this folder exists, as it will not be automatically created. Does not apply to the web interface! This should not contain a leading slash, but must contain a trailing slash. Example: Users/jenny/.
| grantPermission      | String     | Value must be set to full, read, write, preview, read+write, or preview+write. The user will be granted that permission on their FTP root folder as defined by the user_root. This property is write-only. It cannot be retrieved via the User resource of the REST API, though may be obtained with the Permissions resource of the REST API.

## Brickftp.updateUser
This method updates an existing user.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Your API key.
| subdomain            | String     | Your site’s subdomain.
| id                   | String     | Globally unique identifier of each User. Each user is given an ID automatically upon creation.
| username             | String     | Username for the user. This is how the user will be displayed on the site.
| password             | String     | Password for the user. This property is write-only. It cannot be retrieved via the API.
| name                 | String     | Real name of the user. For your reference.
| email                | String     | E-Mail address of the user.
| notes                | String     | You may use this property to store any additional information you require. There are no restrictions on its formatting.
| groupIds             | List       | IDs of the Groups that this user is in.
| ftpPermission        | Boolean    | Allow user access via FTP/FTPS (port 21 or 990) interface.
| sftpPermission       | Boolean    | Allow user access via SFTP (port 22) interface.
| davPermission        | Boolean    | Allow user access via WebDAV (port 443) interface.
| restapiPermission    | Boolean    | Allow user access the REST API, via HTTP/HTTPS (port 80 or 443), and the desktop application.
| attachmentsPermission| Boolean    | Allow user to use Sharing tab in web interface to share files with anonymous users via a unique URL.
| selfManaged          | Boolean    | Allow user to change their password and user information via the web interface.
| requirePasswordChange| Boolean    | Require user to change their password at their next login. Note: requires restapi_permission to be true, as password changes can only occur via the web interface.
| allowedIps           | List       | List allowed IPs, one per line. You may specify a range in CIDR format, such as 192.168.1.0/27. Leave blank to allow all IPs. If you are also restricting IP addresses on the Site tab, users matching in either place will be allowed to log in.
| userRoot             | String     | Folder to show as the root when this user logs in via the FTP interface. Make sure this folder exists, as it will not be automatically created. Does not apply to the web interface! This should not contain a leading slash, but must contain a trailing slash. Example: Users/jenny/.
| grantPermission      | String     | Value must be set to full, read, write, preview, read+write, or preview+write. The user will be granted that permission on their FTP root folder as defined by the user_root. This property is write-only. It cannot be retrieved via the User resource of the REST API, though may be obtained with the Permissions resource of the REST API.

## Brickftp.deleteUser
This endpoint deletes a user.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each User. Each user is given an ID automatically upon creation.

## Brickftp.unlockUser
This endpoint unlocks a user that has been locked out by Brute Force Login Protection.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each User. Each user is given an ID automatically upon creation.

## Brickftp.getAllGroups
This endpoint lists all groups on the current site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.getSingleGroup
This endpoint shows a single group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Group. Each group is given an ID automatically upon creation.

## Brickftp.createGroup
This endpoint creates a new group on the current site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| name     | String     | Name of the Group. This is how the group will be displayed on the site.
| notes    | String     | You may use this property to store any additional information you require. There are no restrictions on its formatting.
| userIds  | List       | IDs of the Users that are in this group.

## Brickftp.updateGroup
This method updates an existing group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Group. Each group is given an ID automatically upon creation.
| name     | String     | Name of the Group. This is how the group will be displayed on the site.
| notes    | String     | You may use this property to store any additional information you require. There are no restrictions on its formatting.
| userIds  | List       | IDs of the Users that are in this group.

## Brickftp.deleteGroup
This endpoint deletes a group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Group. Each group is given an ID automatically upon creation.

## Brickftp.getAllPermissions
This endpoint shows all Permissions on the current Site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.createPermission
This endpoint creates a new Permission record.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key.
| subdomain | String     | Your site’s subdomain.
| path      | String     | Folder path for the permission to apply to. This must be slash-delimited, but it must neither start nor end with a slash.
| permission| String     | Value must be set to full, readonly, writeonly, or previewonly, depending on the type of access to be granted by the Permission.
| userId    | String     | Unique identifier for the user being granted a permission. Each user is given an ID automatically upon creation. The user_id and group_id fields cannot both be set.
| groupId   | String     | Unique identifier for the group being granted a permission. Each group is given an ID automatically upon creation. The user_id and group_id fields cannot both be set.
| recursive | Boolean    | If set to false, the permission will be non-recursive, and will not apply to subfolders of the folder specified by the path property.

## Brickftp.deletePermission
This endpoint deletes a permission record.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Permission. Each permission is given an ID automatically upon creation.

## Brickftp.getAllNotifications
This endpoint shows all Notifications on the current Site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.createNotification
The create endpoint creates a notification record.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Folder path for notifications. This must be slash-delimited, but it must neither start nor end with a slash.
| userId   | String     | Unique identifier for the user being notified. Each user is given an ID automatically upon creation. You can look up user IDs by using the User resource of this REST API.
| username | String     | Username for the user given by user_id. If this value is set during creation and user_id is not set, the user_id is looked up from the username and set.

## Brickftp.deleteNotification
The delete endpoint deletes a notification record.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Notification. Each notification is given an ID automatically upon creation.

## Brickftp.getAllHistory
This endpoint shows the entire history for the current site. The history starts with the most recent entries and proceeds back in time. There is a maximum number of records that will be returned with a single request (default 1000 or whatever value you provide as the per_page parameter, up to a maximum of 10,000).

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| page     | Number     | Page number of items to return in this request.
| perPage  | Number     | Requested number of items returned per request. Default: 1000, maximum: 10000. Leave blank for default (strongly recommended).
| startAt  | DatePicker | Date and time in the history to start from.

## Brickftp.getLoginHistory
This endpoint shows login history only. The history starts with the most recent entries and proceeds back in time. There is a maximum number of records that will be returned with a single request (default 1000 or whatever value you provide as the per_page parameter, up to a maximum of 10,000).

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| page     | Number     | Page number of items to return in this request.
| perPage  | Number     | Requested number of items returned per request. Default: 1000, maximum: 10000. Leave blank for default (strongly recommended).
| startAt  | DatePicker | Date and time in the history to start from.

## Brickftp.getUserHistory
This endpoint shows all history for a specific user. The history starts with the most recent entries and proceeds back in time. There is a maximum number of records that will be returned with a single request (default 1000 or whatever value you provide as the per_page parameter, up to a maximum of 10,000).

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each History entry.
| page     | Number     | Page number of items to return in this request.
| perPage  | Number     | Requested number of items returned per request. Default: 1000, maximum: 10000. Leave blank for default (strongly recommended).
| startAt  | DatePicker | Date and time in the history to start from.

## Brickftp.getFolderHistory
This endpoint shows all history for a specific folder. The history starts with the most recent entries and proceeds back in time.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Path of the file or folder associated with the History entry.
| page     | Number     | Page number of items to return in this request.
| perPage  | Number     | Requested number of items returned per request. Default: 1000, maximum: 10000. Leave blank for default (strongly recommended).
| startAt  | DatePicker | Date and time in the history to start from.

## Brickftp.getFileHistory
This endpoint shows all history for a specific file. The history starts with the most recent entries and proceeds back in time.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Path of the file or folder associated with the History entry.
| page     | Number     | Page number of items to return in this request.
| perPage  | Number     | Requested number of items returned per request. Default: 1000, maximum: 10000. Leave blank for default (strongly recommended).
| startAt  | DatePicker | Date and time in the history to start from.

## Brickftp.getAllBundles
This endpoint lists all Bundles on the current Site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.getSingleBundle
This endpoint shows a single bundle.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Group. Each group is given an ID automatically upon creation.

## Brickftp.createBundle
This endpoint creates a bundle.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| paths    | List       | List of the paths associated with the Bundle.

## Brickftp.deleteBundle
This endpoint deletes a group.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Bundle.

## Brickftp.listsBundleContent
This endpoint lists the contents of a bundle. When no path is specified, the contents of the root of the bundle will be listed. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Path associated with the Bundle.
| code     | String     | Unique code string identifier for the Bundle.
| host     | String     | Bundle host.

## Brickftp.downloadBundleContent
This endpoint provides download URLs that will enable you to download the files in a bundle. The download URLs are direct URLs to Amazon S3 that have been signed by BrickFTP to provide temporary access to the files. The download links are valid for 3 minutes.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| code     | String     | Unique code string identifier for the Bundle.
| host     | String     | Bundle host.
| paths    | List       | List of the paths associated with the Bundle.

## Brickftp.getAllBehaviors
This endpoint lists all Behaviors on the current Site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.

## Brickftp.getFolderBehavior
This endpoint shows the behaviors that apply to the given path.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Folder path for behaviors. This must be slash-delimited, but it must neither start nor end with a slash.

## Brickftp.getSingleBehavior
This endpoint shows a single behavior.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Behavior.

## Brickftp.createBehavior
This endpoint creates a behavior.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Folder path for behaviors. This must be slash-delimited, but it must neither start nor end with a slash.
| behavior | String     | The behavior type. Will be one of the following: webhook.
| value    | List       | List of values associated with the behavior.

## Brickftp.updateBehavior
This endpoint updates an existing behavior.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Behavior.
| behavior | String     | The behavior type. Will be one of the following: webhook.
| value    | List       | List of values associated with the behavior.

## Brickftp.deleteBehavior
This endpoint deletes a behavior.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| id       | String     | Globally unique identifier of each Behavior.

## Brickftp.listsFolderContent
The index endpoint lists the contents of the folder provided in the URL. Remember that a blank URL refers to the root folder.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key.
| subdomain     | String     | Your site’s subdomain.
| path          | String     | Full path of the folder.
| page          | Number     | Page number of items to return in this request.
| perPage       | Number     | Requested number of items returned per request. Maximum: 5000, leave blank for default (strongly recommended).
| search        | String     | Only return items matching the given search text.
| sortByPath    | String     | Sort by file name, and value is either asc or desc to indicate normal or reverse sort.
| sortBySize    | String     | Sort by file size, and value is either asc or desc to indicate smaller files first or larger files first, respectively.
| sortByModified| String     | Sort by modification time, and value is either asc or desc to indicate older files first or newer files first, respectively.

## Brickftp.createFolder
The create endpoint creates a folder.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| name     | String     | Folder name
| path     | String     | Folder path

## Brickftp.downloadFile
This endpoint provides a download URL that will enable you to download a file. The download URL is a direct URL to Amazon S3 that has been signed by BrickFTP to provide temporary access to the file. The download links are valid for 3 minutes.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| fileName | String     | Name of downloaded file
| path     | String     | File path

## Brickftp.moveFile
This endpoint moves a file or folder

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key.
| subdomain      | String     | Your site’s subdomain.
| fileName       | String     | Name of file
| sourcePath     | String     | Source path
| destinationPath| String     | Destination path

## Brickftp.renameFile
This endpoint renames a file or folder

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key.
| subdomain  | String     | Your site’s subdomain.
| fileName   | String     | Name of file
| sourcePath | String     | Source path
| newFileName| String     | Name of file

## Brickftp.copyFile
This endpoint copies a file or folder to the destination folder.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key.
| subdomain      | String     | Your site’s subdomain.
| fileName       | String     | Name of file
| sourcePath     | String     | Source path
| destinationPath| String     | Destination path

## Brickftp.deleteFile
This endpoint deletes a file or folder.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key.
| subdomain | String     | Your site’s subdomain.
| name      | String     | Name of file or folder
| sourcePath| String     | Source path

## Brickftp.startFileUpload
The first request to upload a new file.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| fileName | String     | Uploaded file
| path     | String     | Destination folder

## Brickftp.uploadFilePart
At this point, you are to send a request to the endpoint provided by BrickFTP with the file data and the headers and parameters provided to you from BrickFTP.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| file     | File       | Uploaded file
| uploadUri| String     | The URL where the file is uploaded to.

## Brickftp.additionalUpload
Once an upload has been opened and before it is completed, additional upload URLs can be requested from the REST API.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| fileName | String     | Uploaded file
| path     | String     | Destination folder
| ref      | String     | Returned at the start of the upload
| part     | String     | Set to the part number the upload URL should refer to.

## Brickftp.completeUpload
After uploading the file to the file storage environment, the REST API needs to be notified that the upload was completed.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| subdomain| String     | Your site’s subdomain.
| path     | String     | Destination folder
| fileName | String     | Uploaded file
| ref      | String     | Returned at the start of the upload

