<?php

/**
 * Replaces current with {{current_dir}}
 */

namespace Deployer;

use Deployer\Task\Context;

desc('Rollback to previous release');
task('rollback', function () {
    $releases = get('releases_list');

    if (isset($releases[1])) {
        $releaseDir = "{{deploy_path}}/releases/{$releases[1]}";

        // Symlink to old release.
        run("cd {{deploy_path}} && {{bin/symlink}} $releaseDir {{current_dir}}");

        // Remove release
        run("rm -rf {{deploy_path}}/releases/{$releases[0]}");

        if (isVerbose()) {
            writeln("Rollback to `{$releases[1]}` release was successful.");
        }
    } else {
        writeln("<comment>No more releases you can revert to.</comment>");
    }
});
