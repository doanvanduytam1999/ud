# UpDiagramCMS

Wordpress site + blogs

## Getting started

To make it easy for you to get started with GitLab, here's a list of recommended next steps.

Already a pro? Just edit this README.md and make it your own. Want to make it easy? [Use the template at the bottom](#editing-this-readme)!

## Add your files

- [ ] [Create](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
- [ ] [Add files using the command line](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:

```
cd existing_repo
git remote add origin https://gitlab.com/updiagram-v2/cms.git
git branch -M main
git push -uf origin main
```

## Integrate with your tools

- [ ] [Set up project integrations](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/integrations/)

## Collaborate with your team

- [ ] [Invite team members and collaborators](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/members/)
- [ ] [Create a new merge request](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/merge_requests/creating_merge_requests.html)
- [ ] [Automatically close issues from merge requests](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/issues/managing_issues.html#closing-issues-automatically)
- [ ] [Automatically merge when pipeline succeeds](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/project/merge_requests/merge_when_pipeline_succeeds.html)

## Test and Deploy

Use the built-in continuous integration in GitLab.

- [ ] [Get started with GitLab CI/CD](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/ci/quick_start/index.html)
- [ ] [Analyze your code for known vulnerabilities with Static Application Security Testing(SAST)](https://gitlab.com/-/experiment/new_project_readme_content:48f87c47ebd5e12f8a08cc8580a4440d?https://docs.gitlab.com/ee/user/application_security/sast/)

---

# Local Guides

## A. Setup environment

### 1. Install XAMPP: [download](https://www.apachefriends.org/download.html)

### 2. Open **hosts** (C:\Windows\System32\drivers\etc) and add local domain

```
# Copyright (c) 1993-2009 Microsoft Corp.
#
# This is a sample HOSTS file used by Microsoft TCP/IP for Windows.
#
# This file contains the mappings of IP addresses to host names. Each
# entry should be kept on an individual line. The IP address should
# be placed in the first column followed by the corresponding host name.
# The IP address and the host name should be separated by at least one
# space.
#
# Additionally, comments (such as these) may be inserted on individual
# lines or following the machine name denoted by a '#' symbol.
#
# For example:
#
#      102.54.94.97     rhino.acme.com          # source server
#       38.25.63.10     x.acme.com              # x client host

# localhost name resolution is handled within DNS itself.
#	127.0.0.1       localhost
#	::1             localhost
127.0.0.1        local-wp.updiagram.com
```

### 3. Open **httpd-vhosts.conf** ([XAMPP install folder]:\xampp\apache\conf\extra) and host for apache server

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/updiagram"
    ServerName  local-wp.updiagram.com
</VirtualHost>
```

### 4. Create database using phpmyadmin

### \* Database name: `updiagramv2`

### \* Import: `updiagramv2.sql.zip`

### \* Create user and grant access

```
CREATE USER 'itcgroup'@'localhost' IDENTIFIED BY 'Asdf@1234';
GRANT ALL PRIVILEGES ON * . * TO 'itcgroup'@'localhost';
```

<br/>

## B. Structure introduce

### `assets/` : include image and all public files

### `css/` : include css file from updiagram v2 source

### `js/` : include all needed css file

### `inc/` : include all helper function

### `includes/` : include all needed component for page

### `templates/`: include all page template for wordpress

### `function.php` : help to create all logics for theme

### `page.php` : default template for home page

### `single.php` : default template for single post page

### `index.php`: default template for page all post (do not touch)

### `content.php`: default template for content post (do not touch)

### `content-none.php`: default template for content if haven't post

### `archive.php`: default template for content archive

### `caterogy.php`: default template for caterogy

### `sidebar.php`: default template for main-sidebar (menu right - left - botton)

### `404.php`: default template for error code 404

### `style.css` : default css file (do not touch)

<br/>

## C. Create page flow

### 1. Development page structure (html, css, js) in updiagram v2 src

### 2. Create new template page in `templates/` and define template name at the most top

```php
<?php
/*
    Template Name: Page Example
*/
?>
```

### 3. Remove the old `main.min.css` and `main.min.css.map` then replace by the new

<br/>

## D. Add meta-box for wordpress page 

### 1. Install plugin Advanced Custom Fields
### 2. Create 
