<?php
// +---------------------------------------------------------------------------+
// TableExample.class.php
//
// Copyright (c) 2013 Jan-Hendrik Willms <tleilax+studip@gmail.com>
// +---------------------------------------------------------------------------+
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or any later version.
// +---------------------------------------------------------------------------+
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
// +---------------------------------------------------------------------------+/

/**
 * TableExample.php
 *
 * @author  Jan-Hendrik Willms <tleilax+studip@gmail.com>
 * @version 1.0
 */
class TableExample extends StudipPlugin implements SystemPlugin
{
    public function __construct()
    {
        parent::__construct();
        
        $navigation = new Navigation($this->getPluginname(), PluginEngine::getLink($this, array(), 'show'));
        $navigation->setImage('blank.gif');
        Navigation::addItem('/tables', $navigation);
    }
    
    public function getPluginname()
    {
        return _('Beispiel-Tabelle');
    }

    public function show_action()
    {
        $factory = new Flexi_TemplateFactory($this->getPluginPath());
        $template = $factory->open('table');
        $template->set_layout($GLOBALS['template_factory']->open('layouts/base'));
        echo $template->render();
    }
}
