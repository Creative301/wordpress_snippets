  <p><?php if(has_excerpt()) {
    echo get_the_excerpt();
  } else {
    echo wp_trim_words(get_the_content(), 18);
  } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>