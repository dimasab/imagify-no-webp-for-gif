# No WebP for GIF

By default, Imagify already excludes animated GIFs from any optimization as they are not supported. However, if you want to exclude all *.gif files from conversion, you can install a plugin that we’ve created specifically for this purpose.

First, you'll need to download the plugin as a *.zip file. Please go to this page <a target="_blank" href="https://github.com/dimasab/imagify-no-webp-for-gif/blob/6a0f6b1e12177434b324d37d6c4bee699b5cc7bb/imagify-no-webp-for-gif.zip">imagify-no-webp-for-gif.zip</a>, click on the three-dot icon on the right side of your screen, and then click **Download**.

<img width="1440" alt="Screenshot 2024-04-18 at 16 11 11" src="https://github.com/dimasab/imagify-no-webp-for-gif/assets/78547184/2a80fee6-a32d-47ff-ae60-1d8a069d9856">


After you have finished downloading, please navigate to your WordPress dashboard, click on **Plugins** > **Add New Plugin** > **Upload Plugin**. On this page, select the ZIP file you just downloaded and click **Install Now**.

<img width="722" alt="Screenshot 2024-04-18 at 16 50 48" src="https://github.com/dimasab/imagify-no-webp-for-gif/assets/78547184/aeea1968-94a7-452c-8fb9-4abbd67b7aa9">


After it has finished installing, click on **Activate Plugin**. Once you've activated the plugin, that’s it. All newly uploaded GIF files won’t be converted to WebP from now on.

Please note that this will not affect any previously uploaded images. Previous GIF images that have been converted to WebP will remain as they are.

If you wish to re-include GIF files into WebP conversion, simply disable the plugin.

Last tested with:
<ul>
    <li>Imagify {2.2.1}</li>
    <li>WordPress {6.5.2}</li>
</ul>

